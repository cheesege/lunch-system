<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF -8">
  </meta>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>中和高中點餐系統</title>
  <link rel=stylesheet href=styles/front-style.css>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    intergrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4" crossorigin="anonymous"></script>
  <script type="text/javascript" src="test.js"></script>
</head>

<body>
    <div id="wrap">
        <!--<div class="first_photo"></div>-->
        <header>
            <a href='#' class="logo">中和高中<img src="imag/logo.png"></a>    
            <nav>

                <svg class="close"  viewBox="0 0 69 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M68.5 32.5C68.5 50.1454 53.3062 64.5 34.5 64.5C15.6938 64.5 0.5 50.1454 0.5 32.5C0.5 14.8546 15.6938 0.5 34.5 0.5C53.3062 0.5 68.5 14.8546 68.5 32.5Z" stroke="black"/>
                    <line x1="22.377" y1="13.6716" x2="49.377" y2="44.6716" stroke="black"/>
                    <line x1="48.3604" y1="19.3466" x2="23.3604" y2="45.3466" stroke="black"/>
                </svg>                
                <ul>
                    <li><a href="https://www.chshs.ntpc.edu.tw/nss/p/index" target="_blank">中和高中校網</a></li>
                    <li><a href="manager.html">管理員名單</a></li>
                </ul>
            </nav>
            <svg class = "menu" viewBox="0 0 46 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.18706e-06 3.31841L45.5 3.31845" stroke="#676363" stroke-width="5"/>
                <path d="M0 12H46" stroke="#676363" stroke-width="5"/>
                <path d="M0 22H46" stroke="#676363" stroke-width="5"/>
            </svg>
                
                        
        </header>
        <script>
            const menu = document.querySelector('.menu');
            const close = document.querySelector('.close');
            const nav = document.querySelector('nav');

            menu.addEventListener('click',() =>{
                nav.classList.add('open-nav');
            })

            close.addEventListener('click',() =>{
                nav.classList.remove('open-nav');
            })

        </script>
        <div class="login">
            <h1>學生登入</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="text" required/>
                    <span></span>
                    <label>帳號</label>
                </div>
                <div class="txt_field">
                    <input type="password" required/>
                    <span></span>
                    <label>密碼</label>
                </div>
                <div class="pass">忘記密碼?</div>
                <input type="submit" value="登入">
                <div class="signup_link">
                    沒有帳號? <a href="#">註冊</a>   
                </div>
            </form>
        </div>
    </div>
    <a href="order1.html">order1</a>
    <a href="order2.html">order2</a>
    <a href="page2.html">page1</a>



</body>

</html>