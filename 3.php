<?php
$sources = [
	"موضوع" => "https://mawdoo3.com/%D8%A8%D8%AD%D8%AB_%D8%B9%D9%86_%D8%AA%D8%A3%D9%87%D9%8A%D9%84_%D8%A7%D9%84%D8%B4%D8%A8%D8%A7%D8%A8_%D9%84%D8%B3%D9%88%D9%82_%D8%A7%D9%84%D8%B9%D9%85%D9%84",
	"تصفح" => "https://tsf7.com/%D8%A8%D8%AD%D8%AB-%D8%B9%D9%86-%D8%AA%D8%A3%D9%87%D9%8A%D9%84-%D8%A7%D9%84%D8%B4%D8%A8%D8%A7%D8%A8-%D9%84%D8%B3%D9%88%D9%82-%D8%A7%D9%84%D8%B9%D9%85%D9%84/",
	"كتاب تاهيل اللشباب المستقيم" => "https://docs.google.com/viewerng/viewer?hl=ar&t=16&url=https://www.alarabimag.com/books/31641.pdf&page=4",
	"وزارة الموارد البشرية" => "https://www.hrsd.gov.sa/care-about-you/youth-empowerment",
	"مواضيع" => "https://mwade3.com/%d8%aa%d8%a3%d9%87%d9%8a%d9%84-%d8%a7%d9%84%d8%b4%d8%a8%d8%a7%d8%a8-%d9%84%d8%b3%d9%88%d9%82-%d8%a7%d9%84%d8%b9%d9%85%d9%84/"
];
?>
<html lang="EN">
<header>
<meta charset="UTF-8">
<style>
.img{
	object-fit: cover;
    height: auto;
}

.listitem{
	/*
	width: fit-content;
    height: 9vh;
    display: flex;
    font-size: 8vh;
    overflow: clip;
    margin-bottom: 1vh;
	*/
	width: auto;
    height: 9vh;
    display: grid;
    font-size: 5vh;
    overflow: clip;
    margin-bottom: 1vh;
	
	
	background: linear-gradient(45deg, #67ffc7, #28bdbd94);
    padding: 0.5vh;
    border: 0px;
    border-radius: 1vh;
	
	transition-duration: 1s;
    transition-timing-function: ease-in-out;
	
	animation-timing-function: ease-in-out;
    animation-name: url;
    animation-duration: 3s;
}
.listitem:hover{
	background: linear-gradient(45deg, #67ffc7, #00ffff94);
}
@keyframes url{
	0%{opacity:0;}
	100%{opacity:1;}
}
#back{
	width: fit-content;
    height: 5vh;
    display: flex;
    font-size: 3vh;
    overflow: clip;
    margin-bottom: 1vh;
	
	
	background: linear-gradient(45deg, red, white);
    padding: 0.5vh;
    border: 0px;
    border-radius: 1vh;
	
	transition-duration: 1s;
    transition-timing-function: ease-in-out;
	
	animation-timing-function: ease-in-out;
    animation-name: url;
    animation-duration: 3s;
}
#back:hover{
	background: linear-gradient(45deg, red , #ababab);
}
</style>
</header>
<body>
<button type="button" onclick="back();" id="back">&#8592 ارجع</button>
<div id="list">
<ul>
<?php
foreach($sources as $sourceindex => $source){
	?>
	<li>
	<button class="listitem" onclick="<?= htmlspecialchars(str_replace(" ","_",$sourceindex)); ?>();" >
	<img class="img" src='http://www.google.com/s2/favicons?domain=<?= $source ?>' />
	<?= $sourceindex; ?>
	</button>
	</li>
<?php
}
?>
</ul>
</div>
<script>
//this is how to creat an element in js
/*
const para = document.createElement("p");
para.innerText = "This is a paragraph";
document.body.appendChild(para);
*/
<?php
foreach($sources as $sourceindex => $source){?>
function <?= htmlspecialchars(str_replace(" ","_",$sourceindex)); ?>(){
	window.open("<?= $source; ?>" , "_self"); 
}
<?php
}
?>
function back(){
	window.open("2.html","_self");
}
</script>
</body>
</html>