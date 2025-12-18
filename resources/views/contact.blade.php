<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    form{
        height:330px;
        width:300px;
        border:2px solid black;
        margin-top:60px;
        margin-left:35%;
        border-radius:10px;

    }
    .name{
        border:2px solid black;
        border-radius:5px;
        width:230px;
        height:30px;
        margin-left:30px;
    }
    .email{
        border:2px solid black;
        border-radius:5px;
        width:230px;
        height:30px;
        margin-left:30px; 
    }
    .msg{
        border:2px solid black;
        width:230px;
        margin-left:30px; 
        height:50px;
        border-radius:5px;
    }
    
    </style>
</head>
<body>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form action="{{ route('contact.send') }}" method="POST">
    @csrf
    <h1 style="text-align:center;font-size:38px;">Contact Us</h1><br>
    <input type="text" name="name" placeholder="Enter Your Name" class="name"><br><br>
    <input type="email" name="email" placeholder="Enter Your Email" class="email"><br><br>
    <textarea name="message" placeholder="Your Message" class="msg"></textarea><br><br>
    <button class="btn btn-primary" type="submit" style="width:100px;margin-left:90px;">Send</button>
</form>

</body>
</html>
