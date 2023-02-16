<?php
    $user = [
        "0" => ['id' => 24,'name' => 'pranav'],
        "1" => ['id' => 25,'name' => 'rohan']
    ];

    $userdata = [
        "0"=> ["25" => ["address" => [
                            'area' => 'sola',
                            'city' => 'Ahmedabad',
                            'pincode' => '388012'
            ]
        ]
    ],
        "1"=> ["24" => ["address" => [
                            'area' => 'vasna',
                            'city' => 'Ahmedabad',
                            'pincode' => '388045'
            ]
        ]
    ]

        ];
    echo "<pre>";
    echo "<p><h3>Input</h3></P>";
    //print_r($user);
    //print_r($userdata);


    foreach($userdata as $key1 => $val1)
{
        foreach($val1 as $key2 => $data)
        {
                foreach($data as $key => $add)
                {
                    $newarr[] = $add;
                }
        }
}
foreach($user as $key => $val)
{
     $user[$key]['address']=$newarr[$key];

}
echo "<p><h3>Output</h3></P>";
print_r($user);


//jshdcjsdkbcjhabdfdfvbajddfbfvlbasdkbkukuBSDKUUSDSCJ NSDSUCUNKDC

$data1 = [0, 1, 2, 3, 4, 5, 6];//Input
echo "Sum of data1 is : " ;
echo array_sum($data1);//Output Using "array_sum" fun.
echo "<br>";


 $data2 = ['0', '1', '2', '3', '4', '5', '6'];
 $intdata2 = array_map(
     function($value)
     {return (int)$value;} ,$data2
 );
 echo "Sum of data2 is : ";
 echo array_sum($intdata2);
 echo "<br>";

 $data3 = [0, 1, 2, 3, 4, 5, 6, '0', '1', '2', '3', '4', '5', '6'];
 $intdata3 = array_map(
    function($value)
    {return (int)$value;} ,$data3
);
 echo "Sum of data3 is : ";
 echo array_sum($intdata3);
 echo "<br>";

 
 $data3 = [0, 1, 2, 3, 4, 5, 6, '0', '1', '2', '3', '4', '5', '6', 'a', 'b', 'c'];
 $intdata3 = array_map(
    function($value)
    {return (int)$value;} ,$data3
);
// echo "<pre>";
// var_dump($intdata3);
 echo "Sum of data3 is : ";
 echo array_sum($intdata3);
?>