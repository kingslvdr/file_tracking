<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="button" id="btn">click me</button>
    <p id="name"></p>
</body>
</html>
<script src="public/assets/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $('#btn').on('click', function(){
            $.ajax({
                method: 'GET',
                url: './api/getUser',
                success: function(data){
                    alert(data)
                }
            })
        })
    })
</script>