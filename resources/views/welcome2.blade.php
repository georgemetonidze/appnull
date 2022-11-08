<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    @livewireStyles
    <link href="{{asset("assets/css/custom.css")}}" rel="stylesheet" type="text/css" />
</head>
<body class="antialiased">
<div class="startscreen">
    <div class="overlap-group5">
        <h1 class="titlevalign-text-middle">Hello Friend!</h1>
        <div class="flex-row">
            <p class="enter-your-personalvalign-text-middle">Enter your personal details and start journey  with us!</p>
            <img
                class="arrow-copy"
                src="https://anima-uploads.s3.amazonaws.com/projects/636673d44aab17dcf2e26d6b/releases/6366741d4aab17dcf2e26d6c/img/arrow-copy@2x.svg"
                alt="arrow copy"
            />
        </div>
    </div>
    <div class="flex-col">
        <div class="add-a-uservalign-text-middle">Add a User</div>
        <div class="type-in-your-infovalign-text-middlesfcompact-regular-normal-abbey-18px">Type in your info</div>
        <div class="overlap-group1">
            <div class="placevalign-text-middlesfcompact-regular-normal-abbey-18px">Name</div>
        </div>
        <div class="overlap-group6">
            <div class="namevalign-text-middlesfcompact-regular-normal-abbey-18px">Email</div>
        </div>
        <div class="overlap-group4">
            <div class="name-1valign-text-middlesfcompact-regular-normal-abbey-18px">Password</div>
        </div>
        <div class="overlap-group2">
            <div class="countryvalign-text-middlesfcompact-regular-normal-abbey-18px">Country</div>
            <img
                class="arrow"
                src="https://anima-uploads.s3.amazonaws.com/projects/636673d44aab17dcf2e26d6b/releases/6366741d4aab17dcf2e26d6c/img/arrow@2x.svg"
                alt="arrow"
            />
        </div>
        <div class="overlap-group3">
            <div class="date-of-birthvalign-text-middlesfcompact-regular-normal-abbey-18px">Date of Birth</div>
            <img
                class="combined-shape-16"
                src="https://anima-uploads.s3.amazonaws.com/projects/636673d44aab17dcf2e26d6b/releases/6366741d4aab17dcf2e26d6c/img/combined-shape-16@2x.svg"
                alt="Combined shape 16"
            />
        </div>
        <div class="overlap-group">
            <div class="savevalign-text-middle">SAVE</div>
        </div>
    </div>
</div>

@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>


</html>
