<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../vendor/shr/shower/themes/ribbon/styles/styles.css">

    <link rel="stylesheet" href="../../vendor/highlight/highlight.default.min.css">
    <link rel="stylesheet" href="../../vendor/highlight/atom-one-dark-reasonable.css">

    <link rel="stylesheet" href="../css/timeline.css">

    <script type="text/javascript" src="../../vendor/highlight/highlight.min.js" defer ></script>

    <script type="text/javascript" defer >

        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('pre code').forEach((el) => {
                hljs.highlightElement(el);
            });
        });

    </script>

    <style>
        .shower {
            --slide-ratio: calc(16 / 9);
        }

        .slide ul {
            width: 110%;
            font-size: 1.4rem;
        }

        .slide .columns img {
            width: 120%;
        }

        .shower.list {
            --slide-scale: 0.5;
        }

        .slide h2
        {
            text-shadow: 0 0 3px rgba(0,0,0,1);
        }

        .shower {
            --slide-ratio: calc(16 / 9);
        }

        .slide ul {
            width: 110%;
            font-size: 1.4rem;
        }

        .slide .columns img {
            width: 120%;
        }

        .shower.list {
            --slide-scale: 0.5;
        }

        .slide h2
        {
            text-shadow: 0 0 3px rgba(0,0,0,1);
        }

        #cover h2,
        .cover h2
        {
            margin: 30px 0 0;
            color: white;
            text-align: center;
            font-size: 70px;
        }

        #cover p,
        .cover p
        {
            margin: 10px 0 0;
            text-align: center;
            color: white;
            font-style: italic;
            font-size: 20px;
        }

        #cover p a,
        .cover p a
        {
            color: white;
        }

        .slide div pre
        {
            font-size: 0.7rem;
            border: solid 2px #000;
            border-radius: 8px;
            height: auto;
        }

        .slide div pre code:not(:only-child)::before
        {
            display: none;
        }

        .hljs-tag
        {
            color: #f90;
        }

    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body class="shower list">
