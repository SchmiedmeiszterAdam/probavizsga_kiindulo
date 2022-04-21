@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
    <link rel="stylesheet" href="./css/fooldal.css">
    <link rel="stylesheet" href="./css/kezdooldal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/Ajax.js"></script>
    <script src="./js/Szakdoga.js"></script>
    <script src="./js/script.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai
        </h2>
    </header>
<main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">
                        Admin oldal
                        <table class="listaadmin">
                            <thead class="fejlec">
                                <th class="szakdogacime">Szakdolgozat címe</th>
                                <th class="tagok">Készítők neve</th>
                                <th class="githublink eltun">GitHub link</th>
                                <th class="oldallink eltun">Szakdolgozat elérhetősége</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody id='szakdogak'></tbody>
                        </table>
                    </div>
                    <div class="ujadat">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" class="beviteli" id="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" class="beviteli" id="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" class="beviteli" id="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" class="beviteli" id="githublink"></div>
                            <div class="gomb"><input type="button" id="uj" value="Új"></input>
                                <input type="button" id="modosit" value="Módosít"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
</html>
