<?php

namespace Tests\Feature\API\Controllers;

use App\Models\BodyPart;
use App\Models\Equipment;
use App\Models\Exercise;
use App\Models\Level;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExerciseTest extends TestCase
{
    use RefreshDatabase;
    protected $token;
    public function setUp() : void
    {
        parent::setUp();
        $this->artisan('passport:install');
        $this->token = $this->createToken();
    }
    public function test_return_exercises_list_return_200_status_code()
    {
        $equipment = Equipment::create([
            'ar' => [
                'title'   => 'مجموعة الدمبل'
            ],
            'en' => [
                'title'     => 'Dumbbell set'
            ],
        ]);
        $level = Level::create([
            'ar' => [

                'title'       => 'مبتدئ',
                'description' => 'إذا كنت جديدًا في ممارسة التمارين الرياضية بانتظام ، فابدأ بالتمارين التي تجهز العضلات للتحرك بشكل جيد من أجل بناء القوة والذاكرة العضلية. عادة ما يتكون روتين المبتدئين من كثافة منخفضة ، وإصدارات معدلة من التمارين مع القليل من التنوع ، وتدريبات لمدة أقصر. سيضمن لك بناء أساس متين كروتين مبتدئ الحصول على أفضل النتائج على المدى الطويل.'
            ],
            'en' => [
                'title'       => 'Beginners',
                'description' => 'If you are new to working out on a regular basis, begin with exercises that prepare the muscles to move with good form in order to build strength and muscle memory. A beginner’s routine usually consists of a low intensity, modified versions of exercises with little variety, and shorter duration workouts. Building a solid foundation as a beginner routine will insure you to get the best results in the long run.'
            ]
        ]);
        $bodyParts = [
            [
                'id'    => 1,
                'ar' => [
                    'title'   => "الأكتاف"
                ],
                'en' => [
                    'title'   => "Shoulders"
                ],
            ],
            [
                'id'    => 2,
                'ar' => [
                    'title'   => "الصدر"
                ],
                'en' => [
                    'title'   => "Chest"
                ],
            ],
        ];
        foreach($bodyParts as $bodyPart){
            BodyPart::create($bodyPart);
        }
        $bodyPartList = BodyPart::all();

        $exercise = [
            'title_en'           => 'push-ups',
            'title_ar'           => 'الضغط',
            'instruction_en'     => 'push-ips instruction',
            'instruction_ar'     => 'الضغط',
            'tip_en'             => 'push ups tips',
            'tip_ar'             => 'الضغط',
            'equipment_id'       => $equipment->id,
            'level_id'           => $level->id,
            'place'              => 1,
            'exercise_category'  => 1,
            'body_part_id'       => $bodyPartList[1]['id']
        ];
        $response =  $this->actingAs($this->manager)->post('manager/exercises', $exercise);
        $response->assertStatus(302);
        $lastExercise = Exercise::query()
            ->with('level','equipment')
            ->withTranslation()->latest()->first();
        $this->assertEquals($exercise['equipment_id'], $lastExercise->equipment_id);
        $this->assertEquals($exercise['title_en'], $lastExercise->title);

        $exerciseResponse = $this->withHeaders($this->token)->get('/api/v1/customer/exercises');
        $exerciseResponse->assertOk();
        $this->assertNotEquals($exerciseResponse['payload'],[]);
    }
    public function test_return_exercises_list_return_200_status_code_and_empty()
    {
        $exerciseResponse = $this->withHeaders($this->token)->get('/api/v1/customer/exercises');
        $exerciseResponse->assertOk();
        $exerciseResponse->assertJsonStructure([
            "code",
            "error",
            "message",
            "payload"
        ]);
        $this->assertEquals($exerciseResponse['payload'],[]);
    }
}
