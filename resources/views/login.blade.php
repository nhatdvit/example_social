<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .social-button {                                                                        
        background-position: 25px 0;
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        cursor: pointer;
        display: inline-block;
        height: 50px;
        line-height: 50px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        vertical-align: middle;
        width: 100%;
        border-radius: 5px;
        margin: 10px auto;
    }
    
    #line {
        background: #00C300;
    }
    
    #line span {
        box-sizing: border-box;
        color: #ffffff;
        cursor: pointer;
        text-align: center;
    }
    
    .badge {
        display: inline-block;
        float: left;
        width: 60px;
        height: 60px;
        line-height: 60px;
        overflow: hidden;
        text-align: center;
        font-size: 2.6rem;
        border-right: #fff 1px solid;
        margin-right: 0.7em;
        font-weight: normal;
    }
    　　
</style>
<body>
    <div class="col-sm-12">
        <a href="{{$authUrl}}" class="social-button" id="line">
             <span class="badge">
                 <img src="{{asset('/images/social-network/line-logo.png')}}" alt="">
             </span>
             <span> LINEでログイン</span>
        </a>
    </div>
</body>
</html>