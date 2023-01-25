<?php

$data = [
    [
        'class' => 'Class One',
        [
            'section' =>
            [
                'name' => 'section One',
                'students' => ['Raauf', 'Ali', 'Ahmed']
            ]
        ],
        [
            'section' =>
            [
                'name' => 'section Two',
                'students' => ['khan', 'mohammad', 'ahmed']
            ]
        ],
        [
            'section' =>
            [
                'name' => 'section 3',
                'students' => ['mia', 'sagor', 'saad']
            ]
        ]
    ],

    [
        'class' => 'Class Two',
        [
            'section' =>
            [
                'name' => 'section One',
                'students' => ['Raauf', 'Ali', 'Ahmed']
            ]
        ],
        [
            'section' =>
            [
                'name' => 'section Two',
                'students' => ['khan', 'mohammad', 'ahmed']
            ]
        ],
        [
            'section' =>
            [
                'name' => 'section 3',
                'students' => ['mia', 'sagor', 'saad']
            ]
        ]
    ],


    [
        'class' => 'Class Two',
        [
            'section' =>
            [
                'name' => 'section One',
                'students' => ['Raauf', 'Ali', 'Ahmed']
            ]
        ],
        [
            'section' =>
            [
                'name' => 'section Two',
                'students' => ['khan', 'mohammad', 'ahmed']
            ]
        ],
        [
            'section' =>
            [
                'name' => 'section 3',
                'students' => ['mia', 'sagor', 'saad']
            ]
        ]
    ],

];

/* echo '<pre>';

foreach ($data as $classes) {
    foreach ($classes as $class_name => $class) {
        if (is_array($class)) {

            foreach ($class as $sections) {
                foreach ($sections as $section) {
                    if (is_array($section)) {
                        foreach ($section as $student) {
                            echo ' <p>' . $student . '</p> '  . '<br>';
                        }
                    } else {
                        echo ' <h4>' . $section . '</h4> '  . '<br>';
                    }
                }
            }
        } else {
            echo ' <h1>' . $class . '</h1> '  . '<br>';
        }
    }
    echo '<hr>';
}
*/
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            foreach ($data as $classes) {
            ?>
                <div class="col-6 mt-4">
                    <div class="card">
                        <?php
                        foreach ($classes as $class_name => $class) {
                            if (!is_array($class)) {
                        ?>
                                <div class="card-header">
                                    <h4><?php echo $class; ?></h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <?php
                                    } else {
                                        foreach ($class as $sections) {
                                        ?>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <?php
                                                    foreach ($sections as $section) {
                                                        if (!is_array($section)) {
                                                    ?>
                                                            <div class="card-header">
                                                                <h5><?php echo $section; ?></h5>
                                                            </div>
                                                        <?php } else { ?>

                                                            <div class="card-body">
                                                                <ol>
                                                                    <?php 
                                                                    foreach ($section as $student) {
                                                                    ?>
                                                                        <li><?php echo $student; ?></li>
                                                                    <?php } ?>
                                                                </ol>

                                                            </div>
                                                    <?php }
                                                    } ?>
                                                </div>
                                            </div>
                                <?php }
                                    }
                                } ?>
                                    </div>
                                </div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>