<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Installation Script</title>
    <style>
        html {
            background-color: #d7d7d7;
        }

        body {
            font-family: "Arial", sans-serif;
            max-width: 860px;
            margin: 40px auto;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
            padding: 25px;
            box-sizing: border-box;
        }

        .check_ok {
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAYAAABr5z2BAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAAdFJREFUKJGVktFLU2EYxn/HnbHDSGONIKfeRcqYa6AyMFngTUwCRWhhV131D3jVbCqk5bUXuxGiEAoiHLguEu8KjBBiEIRhguAwDQnZkbHzfed8n1eTZQb6Xr3vA7+Hl+d94YLV86xnIr2Qfs0UTQDmReDEXCI3khrJ+vAFXM/1rU6tjvnOC8fn4rmh/qGsRltSSaM93B6t/Kr8PtkgNB6KudJ17Hl78zQcm4nlBnsHs1JJS3gCpRXlj+XF0nQpb9bh4VvDBa20WmLpbqNJdCaaG+gdyEqk5UgHrTW7n3ffLE8vPwTwhcZDsXR/utByueW6P+APt15tvbMT2VkRX8Sfrqddk8lEMus1eZbwBEIJ9tf33xUni2OABjCDZrDTMI0rVVlFowk2B2+kkqni1vOtlXg0/qhGzZJCYgubo9JRYW127X4dBjAAOp50ZPpu9uXNgBlWWqFQKK04qB6wV93jsHaI89V5a7+wHwBeYz5GvYk8jmS64915w2+Ey3aZ7co2NbcGgPqmCuqlygDu6YCNxqFtou1e5VJl3sa+diJu8J5XjALyrPP+9Qf2J/u76BQ/MbmNppkNPrDIKCDOgv8xAGCdH0TZxMVigQzg/A8GOAZSQcXE4Oz/qQAAAABJRU5ErkJggg==');
            width: 16px;
            height: 12px;
            display: inline-block;
        }

        .check_fail {
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAAjhJREFUOI2Fk+9PUlEYx7/Hi9B2x8V7b8wyV5ltMfs5YzUUdQhUb1z2H7Qp/hX+I01b4NZ7XlSWrBFkupaLRmuVTFKqoSJcfoztcjmX04uE8av1bOfNeT7fz/OcFwc4rgAgr0/bk34L78I/akUQvO88t3aWAKmlEQDkTzNT2cKij/3wzdJukhVB8O4uPKCFRR+LzTgzdQkJAPK1e+PbF2zDDWs2c6RHgxHvw3I5DABPBeHu+P3J56IscXUm+SVxtBXavETWRy8nr9qvDLVPzGZyenRtw2vkmGnM43wmnhS5dia+9TlB/DzvmnDaQ3KTvSHJ5vQe0gNR6uvo5ZQ8fRPenCYA4Od518To9ZAktoGMgVU1oErBdB2o6QBjyBVLNPJ9xz2vqlFSZ/0873KOjIQkQeBYtQqoKpimAYy1OJVymYZ3d6cXKH0LAKS56TeZXI5TgyGJM3SsDAC5iqqv/95zzwGR+p2hGSCUGqFqqPWSzjSAWrXWcdcglznuzph14IWl19R1euMJWkV/f/CzsQUBgCWO8zqsZ1bN/wnXq6Cp+odjCXnMcZ6b1sGXZmNnuKipOgAIxhNdex/3U26yahYTw5L1YjtQ0lQaS6fcBCA3Tp99be4iSSiH33p+lZTbqVI+QwlB/ShahcbSKfc8EJ0DIlvplFvRKnozs1dUDg6LeQeAv59pTe7PxIdsbGPgXHUZmGyf9giGqY2B8zQ+ZGOvpP79J0BfCxAA5KBF3O4WbpYELeLX5vAfETvzqIeEC14AAAAASUVORK5CYII=');
            width: 16px;
            height: 16px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-spacing: 0;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        table tr>td {
            padding: 10px;
            border-right: 1px dashed #ccc;
            border-bottom: 1px dashed #ccc;
        }

        table tr>td:last-child {
            border-right: 0;
        }

        table tr:last-child>td {
            border-bottom: 0;
        }

        ul li {
            margin-bottom: 3px;
        }

        .section {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 15px;
            background-color: #ddd;
        }
    </style>
</head>
<body>