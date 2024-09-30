<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tr>
        <td>var1   &nbsp;  &nbsp;   </td>
        <td>var2    &nbsp; &nbsp;   </td>
        <td>result  &nbsp; &nbsp;   </td>
    </tr>
    <br>
            @foreach($calculations as $calculation)
                <tr>
                    <td>{{ $calculation->var1 }}&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;</td>
                    <td>{{ $calculation->var2 }}&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;</td>
                    <td>{{ $calculation->result }}&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;</td>
                    <br>
                </tr>
            @endforeach
</body>
</html>