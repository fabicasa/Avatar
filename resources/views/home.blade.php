@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="Avatar.css">
    <link rel="stylesheet" href="Colors.css">
    <link rel="stylesheet" href="Options.css">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-12"
            @csrf
                <div class="form-row">
                    <div class="col-11"></div>
                    <div class="col-auto">
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h5>Avatares</h5></div>
                <div class="card-body">

                    <body>
                    <div id="AvatarCreator">
                        <div class="Avatar">
                            <div id="AvatarContainer">
                                <img id="Avatar" src="Monsters/Monster 11.png" alt="Monster">
                            </div>
                            <button type="button" class="btn btn-primary">Guardar avatar</button>

                        </div>

                            <div class="arrows">
                                <div class="leftArrow">
                                    <button class="btn btn-secondary" onclick="previous()" type="button" name="button"><</button>
                                </div>
                                <div class="rightArrow">
                                    <button class="btn btn-secondary" onclick="next('Mouth')" type="button" name="button">></button>
                                </div>
                            </div>
                        </div>

                    <script type="text/javascript" src="Script.js"></script>
                    </body>
                  </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Accesorios</h5>
                </div>

                <div class="card-body">
                    <div class="list-group">
                        <div class="Options">

                            <div class="row" id="row3">
                                <div class="option" onclick="avatar('Monster', 11)">
                                    <img class="imgOption" id="option11" src="Monsters/Monster 11.png" alt="Monster 11" onError = "notExistImage(11)">
                                </div>
                                <div class="option" onclick="avatar('Monster', 12)">
                                    <img class="imgOption" id="option12" src="Monsters/Monster 12.png" alt="Monster 12" onError = "notExistImage(12)">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
