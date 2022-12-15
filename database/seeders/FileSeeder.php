<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('files')->insert(
            [['type'=>'film',
            'path'=>'https://cloud.cdnland.in/4bf8caf96bc6af5a7e9ddc14e63d3076:2022121608/movies/89a9d4e4218cac2d211900c422043653e413660c/240.mp4',
            'obj_id'=>1],            
            ['type'=>'film',
            'path'=>'https://matrix.cloud.cdnland.in/626dc095bb2e8178ef5966fa6a6393cf:2022121523/movies/f43a7364714ec9e810f08f66169bcbf4742bc45d/240.mp4',
            'obj_id'=>2], 
            ['type'=>'film',
            'path'=>'https://dysprosium.stream.voidboost.cc/6/3/1/3/7/8/cceb6b3412a119e07980ecda52c09771:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSVBQNllVOEZFQjY1eXpQQ1Y1dVV4RXdXeXlNUW5uQzM2dkM3Z0RoMFMzbUE9PQ==/linh6.mp4',
            'obj_id'=>3],
            ['type'=>'film',
            'path'=>'https://explorer.cloud.cdnland.in/d3a9618abe0e760396d277c93ba659cc:2022121603/movies/60f85aa05e394cbb51c0152680a26fc6683eb6ec/240.mp4',
            'obj_id'=>4],
            ['type'=>'film',
            'path'=>'https://vegas.stream.voidboost.cc/1/7/2/0/5/6/334cd105ac247585a84f5626c4d67b86:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSVBQNllVOEZFQjY1eXpQQ1Y1dVV4RStub05wS2xsWlJDOGREZ3ZuVWtpN1E9PQ==/9tt4i.mp4',
            'obj_id'=>5],
            ['type'=>'film',
            'path'=>'https://radium.stream.voidboost.cc/1/9/6/8/1/8/d39cb7dc9e7a5de5131a53c989ca2489:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSVBQNllVOEZFQjY1eXpQQ1Y1dVV4RVlUR0h3V1NwNEIzQnRudHBtZWdUY2c9PQ==/v4wl5.mp4',
            'obj_id'=>6],
            ['type'=>'film',
            'path'=>'https://niobium.stream.voidboost.cc/5/8/4/2/6/f67bfb6a292ce27608b2ddf22e05d426:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSVBQNllVOEZFQjY1eXpQQ1Y1dVV4RVdUc1JGUVZhdDlmeW5sVFVqWVVnT0E9PQ==/8jpwu.mp4',
            'obj_id'=>7],
            ['type'=>'film',
            'path'=>'https://uranium.stream.voidboost.cc/4/3/7/6/5/f495114fead8ebb033d960b7bbba031c:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSVBQNllVOEZFQjY1eXpQQ1Y1dVV4RW5vTjNsZmVMeVpoUlgzR0VtWFpnbnc9PQ==/2224m.mp4',
            'obj_id'=>8],
            ['type'=>'film',
            'path'=>'https://lynx.stream.voidboost.cc/4/4/0/3/2/c844a1b52ce3a748fce6b064d0e9a22d:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSVBQNllVOEZFQjY1eXpQQ1Y1dVV4RVhObzJDakFOUE5YMkdpSnlCQjhrRUE9PQ==/ey5yx.mp4',
            'obj_id'=>9],            
            ['type'=>'film',
            'path'=>'https://sparta.stream.voidboost.cc/3/4/4/1/1/9/1400fde1d0121928263dd3a5a64b313e:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSVBQNllVOEZFQjY1eXpQQ1Y1dVV4RWpOYnptS0lseVJKYWRsbjA4cTE4S0E9PQ==/j0xqi.mp4',
            'obj_id'=>10], 
            ['type'=>'series',
            'path'=>'https://sparta.stream.voidboost.cc/1/6/6/6/0/8/1c8be968fe73f958546f9f8b4edcf703:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSis1VmZpSUk2c2FScFBualRrQkNPRjdWWHNiU2lqaGtOVndsdDRWWjZ1aXc9PQ==/ts28g.mp4',
            'obj_id'=>11],
            ['type'=>'series',
            'path'=>'https://ozzy.stream.voidboost.cc/8/9/4/0/6/72fd2c52bfcf87a6ba36f9f667ef5b1b:2022121516:OFF5cHIzYXF0QnR3NnNVVFg3R3FFY3BxNmFaNFNDNnFLMEFBcy9QbDVrSis1VmZpSUk2c2FScFBualRrQkNPRnJOL2hZSG9MY1VQSW9wLy9tZFI5dFE9PQ==/l77hm.mp4',
            'obj_id'=>12],
            ['type'=>'series',
            'path'=>'123',
            'obj_id'=>13],
            ['type'=>'series',
            'path'=>'123',
            'obj_id'=>14],
            ['type'=>'series',
            'path'=>'123',
            'obj_id'=>15],
            ['type'=>'series',
            'path'=>'123',
            'obj_id'=>16],
            ['type'=>'series',
            'path'=>'123',
            'obj_id'=>17],            
            ['type'=>'series',
            'path'=>'123',
            'obj_id'=>18], 
            ['type'=>'series',
            'path'=>'123',
            'obj_id'=>19],
            ['type'=>'trailer',
            'path'=>'123',
            'obj_id'=>20],
            ['type'=>'trailer',
            'path'=>'123',
            'obj_id'=>21],
            ['type'=>'trailer',
            'path'=>'123',
            'obj_id'=>22],
            ['type'=>'trailer',
            'path'=>'123',
            'obj_id'=>23],
            ['type'=>'trailer',
            'path'=>'123',
            'obj_id'=>24],
            ['type'=>'trailer',
            'path'=>'123',
            'obj_id'=>25],
            ['type'=>'photo',
            'path'=>'https://uznayvse.ru/person/tomhanks/1299829633_www.little-files.net_www.cinema-boom.net.jpg',
            'obj_id'=>1],            
            ['type'=>'photo',
            'path'=>'https://upload.wikimedia.org/wikipedia/commons/e/e4/Morgan_Freeman_Deauville_2018.jpg',
            'obj_id'=>2], 
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>3],
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>4],
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>5],
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>6],
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>7],
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>8],
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>9],            
            ['type'=>'photo',
            'path'=>'123',
            'obj_id'=>10],
        ]);
    }
}
