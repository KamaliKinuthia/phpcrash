<?php
//simple array
$numbers= [1,44,55,22];
$fruits=array('apple','orange','pear');
$fruits1=['apple','orange','pear'];

// var_dump($numbers, $fruits1, $fruits);
//echo $fruits[1] //this prints the content in the second position
$hex =[
    'red'=> '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
]
;
// echo $hex ['blue'];

$person=[
    'first_name'=>'Brad',
    'last_name' =>'Traversy',
    'email'=> 'brad@gmail.com'
];
// echo $person ['first_name'];

$people =[
    [
        'first_name'=>'Brad',
        'last_name' =>'Traversy',
        'email'=> 'brad@gmail.com'
    ],
    [
        'first_name'=>'joe',
        'last_name' =>'Traversy',
        'email'=> 'brad@gmai l.com'
    ],
    [
        'first_name'=>'jane',
        'last_name' =>'Traversy',
        'email'=> 'brad@gmail.com'
    ]
    ];

echo $people [2] ['first_name'];
var_dump(json_encode($people));
//time lapse 42:12

?>
