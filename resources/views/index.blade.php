<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winnowing App</title>

    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
    <nav id="globalnav" class="globalnav">
        <div class="container">
            <a href="#" class="brand-logo">Winnowing App</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="https://muhrusdi.github.io">Github</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
        </div>
    </nav> 
<?php
$n = isset($_POST['n']) ? $_POST['n'] : 5;
$window = isset($_POST['window']) ? $_POST['window'] : 4;
$prima = isset($_POST['prima']) ? $_POST['prima'] : 2;
?>
    <div class="main">
        <div class="m-source">
            <div class="row">
                <div class="">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab col s3"><a href="#tab1">Text</a></li>
                        <li class="tab col s3"><a href="#tab2">PDF</a></li>
                    </ul>
                </div>
                <div class="m-content">
                    <div id="tab1" class="text col s12">
                        {!! Form::open(array('url' => '/')) !!}
                            <div class="row">
                                <div class="col l6">
                                    <div class="mc-text">
                                        <div class="title">
                                            <h5>Text 1</h5>
                                        </div>
                                        <div class="mc-text-content">
                                            <textarea class="materialize-textarea" name="text" id="" cols="30" rows="10" placeholder="Ketik disini"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l6">
                                    <div class="mc-text">
                                        <div class="title">
                                            <h5>Text 2</h5>
                                        </div>
                                        <div class="mc-text-content">
                                            <textarea class="materialize-textarea" name="text2" id="" cols="30" rows="10" placeholder="Ketik disini"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l5">
                                    <p>N Gram : <input type ="text" name = "n" value = "" ></p>
                                    <p>Window : <input type ="text" name = "window" value = "" ></p>
                                    <p>Bilangan Prima :
                                    <select name = "prima">
                                        <option>Pilih Salah Satu</option>
                                        {!! <?php
                                        for($i = 2; $i < 100; $i++){
                                                $hitung = 0;
                                                for($j = 1; $j <= $i; $j++){
                                                        if(($i % $j) == 0) $hitung++;
                                                }
                                                if($hitung == 2) {
                                                        $selected = ''; if($prima == $i) $selected = ' selected';
                                                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                                                }
                                        }
                                        ?>
                                        !!}
                                        </select>
                                </div>
                                <div class="col l12">
                                    {!! Form::submit('Proses', array('class' => 'waves-effect waves-light btn')) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    
                    <div id="tab2" class="pdf col s12">
                        {!! Form::open(array('url' => '/pdf', 'files'=> true)) !!}
                            <div class="row">
                                <div class="col l6">
                                    <div class="mc-pdf-content">
                                        <div class="title">
                                            <h5>Document 1</h5>
                                        </div>
                                        <input type="file" name="pdf">
                                    </div>
                                </div>
                                <div class="col l6">
                                    <div class="mc-pdf-content">
                                        <div class="title">
                                            <h5>Document 2</h5>
                                        </div>
                                        <input type="file" name="pdf2">
                                    </div>
                                </div>
                                <div class="col l5">
                                    <p>N Gram : <input type ="text" name = "n" value = "" ></p>
                                    <p>Window : <input type ="text" name = "window" value = "" ></p>
                                    <p>Bilangan Prima :
                                    <select name = "prima">
                                        <option>Pilih Salah Satu</option>
                                        {!! <?php
                                        for($i = 2; $i < 100; $i++){
                                                $hitung = 0;
                                                for($j = 1; $j <= $i; $j++){
                                                        if(($i % $j) == 0) $hitung++;
                                                }
                                                if($hitung == 2) {
                                                        $selected = ''; if($prima == $i) $selected = ' selected';
                                                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                                                }
                                        }
                                        ?>
                                        !!}
                                        </select>
                                </div>
                                <div class="col l12">
                                    {!! Form::submit('Proses', array('class' => 'waves-effect waves-light btn')) !!}
                                </div>
                                
                            </div>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>