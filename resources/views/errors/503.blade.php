<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
		<style>
		*{
			margin: 0;
			padding: 0;
			font-family: 'poppins', sans-serif;
			box-sizing: border-box;

		}
		.container{
			width: 100vw;
			height: 100vh;
			background-image: url(https://www.touteleurope.eu/wp-content/uploads/2021/12/europe-espace.jpg);
			background-position: center;
			background-size: cover;
			padding: 0 8%;

		}
		.logo{
			width: 250px;
			padding: 20px 0;
			cursor: pointer;
			color : white;

		}
		.content{
			top: 50%;
			position: absolute;
			transform: translateY(-50%);
			color: #fff;

		}
		.content h1{
			font-size: 64px;
			font-weight: 600;
		}
		.content h1 span{
			color:#ff3753;
		}
		.content button{
			background: transparent;
			border: 2px solid #fff;
			outline: none;
			padding: 12px 25px;
			color: #fff;
			display: flex;
			align-items: center;
			margin-top: 30px;
			cursor: pointer;

		}
		.content button img{
			width: 15px;
			margin-left: 10px;
		}
		.launch-time{
			display: flex;
		}
		.launch-time div{
			flex-basis: 200px;

		}
		.launch-time div p{
			font-size: 60px;
			margin-bottom: -4px;

		}
		.rocket{
			width: 250px;
			position: absolute;
			right: 10%;
			bottom: 0;
			animation: rocket 4s linear infinite;

		}
		@keyframes rocket{
			0%{
				bottom: 0;
				opacity: 0;
			}
			100%{
				bottom: 105%;
				opacity: 1;
			}
		}
		</style>
    </head>
    <body>
        <div class="container">
            <div class="logo">Eternal Dreams</div>
            <div class="content">
                <p>Le site est en maintenance</p>
                <h1>Nous allons<span> nous lancer</span> bientôt !!!!!</h1>
            </div>
            <img src="https://i.postimg.cc/PfwZ6bDk/rocket.png" class="rocket">
        </div>
    </body>
</html>