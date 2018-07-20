
<?php 
session_start();
 include"connection.php";
 if(isset($_SESSION['id'])=="")
 {
 include "header.php";
 }
 else
 {
    include "header1.php";
 }


?>

<!DOCTYPE html>
<html>
<head>

<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike Race Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
<style>
    p{
        color: #190221;
    }
    ul
    {
        color: #190221;




    }
    
</style>
</head>
<body>
<!-- navigation -->
<!-- /navigation --> 
<!-- Page Content -->
<!-- header section -->
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">About</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
<!-- /header section -->
<section class="about-w3layouts">
	<div class="container">
        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6" data-aos="flip-left">
                <div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/about-pic1.jpg);background-position:center;"></div>
					<div class="pogoSlider-slide " data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/about-pic2.jpg);background-position:center;"></div>
					<div class="pogoSlider-slide " data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/about-pic3.jpg);background-position:center;"></div>
				</div>
            </div>
            <div data-aos="flip-right">
                <h3>About Chess</h3>
                <p>Chess is a two-player strategy board game played on a chessboard, a checkered gameboard with 64 squares arranged in an 8×8 grid.[1] The game is played by millions of people worldwide. Each player begins with 16 pieces: one king, one queen, two rooks, two knights, two bishops, and eight pawns. Each of the six piece types moves differently, with the most powerful being the queen and the least powerful the pawn. The objective is to checkmate[note 1] the opponent's king by placing it under an inescapable threat of capture. To this end, a player's pieces are used to attack and capture the opponent's pieces, while supporting each other. In addition to checkmate, the game can be won by voluntary resignation of the opponent, which typically occurs when too much material is lost or checkmate appears inevitable. There are also several ways a game can end in a draw. </p>
				<p>Chess is believed to have originated in India sometime before the 7th century. The game was derived from the Indian game chaturanga, which is also the likely ancestor of the Eastern strategy games xiangqi, janggi, and shogi. (A minority view holds that chess originated in China.) Chess reached Europe by the 9th century, due to the Moorish conquest of Spain. The pieces assumed their current powers in Spain in the late 15th century; the rules were standardized in the 19th century.</p>
				<p>The first generally recognized World Chess Champion, Wilhelm Steinitz, claimed his title in 1886. Since 1948, the World Championship has been regulated by the Fédération Internationale des Échecs (FIDE), the game's international governing body. FIDE also awards life-time master titles to skilled players, the highest of which is grandmaster. Many national chess organizations have a title system of their own. FIDE also organizes the Women's World Championship, the World Junior Championship, the World Senior Championship, the Blitz and Rapid World Championships, and the Chess Olympiad, a popular competition among international teams. FIDE is a member of the International Olympic Committee, which can be considered as a recognition of chess as a sport.[2] Several national sporting bodies (for example the Spanish Consejo Superior de Deportes[3]) also recognize chess as a sport. Chess was included in the 2006 and 2010 Asian Games. There is also a Correspondence Chess World Championship and a World Computer Chess Championship. Online chess has opened amateur and professional competition to a wide and varied group of players.</p>
				<p> Since the second half of the 20th century, computers have been programmed to play chess with increasing success, to the point where the strongest personal computers play at a higher level than the best human players. Since the 1990s, computer analysis has contributed significantly to chess theory, particularly in the endgame. The IBM computer Deep Blue was the first machine to overcome a reigning World Chess Champion in a match when it defeated Garry Kasparov in 1997. The rise of strong computer programs (called "engines") runnable on hand-held devices has led to increasing concerns about cheating during tournaments.</p>
            </div>
            <div>
                <h3>Chess game goal</h3>
                <p>The ultimate aim in the chess game is delivering a checkmate – trapping your opponent´s king. The term checkmate is an alteration of the Persian phrase “Shah Mat”, meaning literally, “the King is 
                ambushed”, and not “the King is dead”, that is a common misconception.</p>
            </div>
            <div>
                <h3>General Chess Rules</h3>
                <p>White is always first to move and players take turns alternately moving one piece at a time. Movement is required. If a player´s turn is to move, he is not in check but has no legal moves, this situation is called “Stalemate” and it ends the game in a draw.</p>
                <p>Each type of piece has its own method of movement. A piece may be moved to another position or may capture an opponent´s piece, replacing on its square (en passant being the only exception). With the exception of the knight, a piece may not move over or through any of the other pieces.</p>
                <p>When a king is threatened with capture (but can protect himself or escape), it´s called check. If a king is in check, then the player must make a move that eliminates the threat of capture and cannot leave the king in check.</p>

                <p>Checkmate happens when a king is placed in check and there is no legal move to escape. Checkmate ends the game and the side whose king was checkmated looses.</p>
            </div>
            <div>
                <h3>The initial position setup</h3>
                <p>The chessboard is made up of eight rows and eight columns for a total of 64 squares of alternating colors. Each square of the chessboard is identified with a unique pair of a letter and a number. The vertical files are labeled a through h, from White´s left (i.e. the queenside) to White´s right. Similarly, the horizontal ranks are numbered from 1 to 8, starting from the one nearest White´s side of the board. Each square of the board, then, is uniquely identified by its file letter and rank number.</p>
                <p>In the initial position setup, the light queen is positioned on a light square and the dark queen is situated on a dark square.</p>
                <p>The diagram below shows how the pieces should be initially situated.</p>
                <div>
                <img src="images/boardsetup.jpg">
            </div>
            </div>
            <div>
                <h3 style="margin-top: 30px;">Chess moves</h3>
                <ul>
                    <li style="margin-bottom: 10px;margin-top: -20px; margin-left: 10px; list-style-type: square;line-height: 1.5;">King can move exactly one square horizontally, vertically, or diagonally. At most once in every game, each king is allowed to make a special move, known as castling.</li>
                    <li style="margin: 10px; list-style-type: square;line-height: 1.5;">Queen can move any number of vacant squares diagonally, horizontally, or vertically.
                    </li>
                    <li style="margin: 10px; list-style-type: square;line-height: 1.5;">Rook can move any number of vacant squares vertically or horizontally. It also is moved while castling.
                    </li>
                    <li style="margin: 10px; list-style-type: square;line-height: 1.5;">Bishop can move any number of vacant squares in any diagonal direction.
                    </li>
                    <li style="margin: 10px; list-style-type: square;line-height: 1.5;">Knight can move one square along any rank or file and then at an angle. The knight´s movement can also be viewed as an “L” or “7″ laid out at any horizontal or vertical angle.

                    </li>
                    <li style="margin: 10px; list-style-type: square;line-height: 1.5;">Pawns can move forward one square, if that square is unoccupied. If it has not yet moved, the pawn has the option of moving two squares forward provided both squares in front of the pawn are unoccupied. A pawn cannot move backward. Pawns are the only pieces that capture differently from how they move. They can capture an enemy piece on either of the two spaces adjacent to the space in front of them (i.e., the two squares diagonally in front of them) but cannot move to these spaces if they are vacant. The pawn is also involved in the two special moves en passant and promotion.

                    </li>
                 </ul>
            </div>
            <div>
                <h3>
                    Castling

                </h3>
                <p>Castling is the only time in the chess game when more than one piece moves during a turn. This chess move has been invented in the 1500´s to help speeding up the game and improving balance of the offense and defense.

</p>
<p>During the castling, the king moves two squares towards the rook he intends to castle with, and the rook moves to the square through which the king passed.

</p>
<p>Castling is only permissible if all of the following conditions hold:

</p>
<ul>
    <li type="square" style="margin: 10px;">Neither king nor rook involved in castling may have moved from the original position;</li>
    <li type="square" style="margin: 10px;">There must be no pieces between the king and the rook;
</li>
</ul>
<p style="margin-top: 30px;">The king may not currently be in check, nor may the king pass through or end up in a square that is under attack by an enemy piece (though the rook is permitted to be under attack and to pass over an attacked square)

</p>
            </div>
            <div>
                <h3>
                    En Passant
                </h3>
                <p>En Passant may only occur when a pawn is moved two squares on its initial movement. When this happens, the opposing player has the option to take the moved pawn “en passant” as if it had only moved one square. This option, though, only stays open for one move.</p>
                <p>The En Passant move was developed after pawns were allowed to move more than one square on their initial move. The idea behind this rule was to retain restrictions imposed by slow movement, while at the same time speeding up the game.</p>
            </div>
            <div>
                <h3>
                    Pawn promotion
                </h3>
                <p>If a pawn reaches the opponent´s edge of the table, it will be promoted – the pawn may be converted to a queen, rook, bishop or knight, as the player desires. The choice is not limited to previously captured pieces. Thus its´ theoretically possible having up to nine queens or up to ten rooks, bishops, or knights if all pawns are promoted.

</p>
            </div>
            

        </div>
        <!-- /.row -->
	</div>
</section>
<!-- last section -->
<!-- /back to top -->	
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/top.js"></script> 
<script src="js/modernizr.min.js"></script>
<script src="js/index.js"></script>
<script src='js/aos.js'></script>
<script src="js/aos2.js"></script>
<!-- js for team section -->
<script src="js/toucheffects.js"></script>
<!-- /js for team section -->
<!-- js for about section -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js for about section -->
<!-- /js files -->
</body>
</html>	
<?php 
 include "footer.php";



?>