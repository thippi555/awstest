<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ヘッダー</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="jquery.sortable.js"></script>
<script>
$().ready(function(){
    $('.sortable').sortableInit();
});

</script>
<style>
.sort_by_asc {
    background-color: #ff9999;
}
.sort_by_desc {
    background-color: #9999ff;
}

</style>
</head>

</head>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
$('#表のID').dataTable();
});

$(".selectBtn").on("click", function(){
  var name1 = $(this).closest('tr').find('input').val();
  $("#productsname1").text(name1);
  var name2 = $(this).closest('tr').find('input[name=name]').val();
  $("#productsname2").text(name2);
  var name3 = $(this).closest('tr').children("td").children('input').val();
  $("#productsname3").text(name3);
});


$(".selectBtn").on("click", function(){
    var name1 = $(this).closest('tr').find('input').val();
    var name2 = $(this).closest('tr').find('input[name=name]').val();
    var name3 = $(this).closest('tr').children("td").children('input').val();
});




</script>



<style>
table {
  border-collapse: collapse;
}
th {
  border: solid 1px #666666;
  color: #ffffff;
  background-color: #005B98 ;
}
td {
  border: solid 1px #666666;
  color: #000000;
  background-color: #ffffff;
}

ul.pageNav03 {
  /zoom: 1;
  overflow: hidden;
  margin: 0 0 10px;
  padding: 10px;
  background: #eee;
}

ul.pageNav03 li {
  float: left;
  margin: 0 1px 1px 0;
}

ul.pageNav03 li span,
#main ul.pageNav03 li a {
  float: left;
  padding: 19px 30px;
  background: #fff;
}
ul.pageNav03 li a:hover {
  background: #ffc;
}

ul {
  list-style: none;
}

input[type=text]:focus,
input[type=email]:focus,
input[type=date]:focus,
input[type=search]:focus,
input[type=url]:focus,
textarea:focus {
  color: #003a6c;
  background-color: #d9f6ff;
}

button, input, select, textarea {
  font-family : inherit;
  font-size   : 100%;
}

h1 {
  color: #364e96;/*文字色*/
  padding: 0.5em 0;/*上下の余白*/
  border-top: solid 3px #364e96;/*上線*/
  border-bottom: solid 3px #364e96;/*下線*/
  background-color:#ff9999;
}

#nav ul li{   
    display: inline;
 } 

#nav ul li {
    display: inline;  
    margin-right: 1em;
} 

h2{
    border:solid 1px #ddd;
  -moz-border-radius: 5px; /* FF */
  -webkit-border-radius: 5px;/* Webkit */
  border-radius: 5px;
  background: #eee;
  background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));
    background: -moz-linear-gradient(top,  #fff,  #eee);
    padding: 5px;
  -pie-background:linear-gradient(top,  #fff,  #eee);
  behavior: url(http://www.webcreatorbox.com/sample/images/PIE.htc);  /* ie */
  font-family: "ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Meiryo,"メイリオ",Helvetica,Sans-Serif;
}
h2 span {
  border-left:5px #3cf solid;
  padding-left:10px;
}


#search ul li{   
    display: inline;
 } 

#search_b ul li{   
    display: inline;
 } 

table td {
  background: #eee;
}
table tr:nth-child(odd) td {
  background: #fff;
}

</style>




<body>
 <img src="/img/logoTH.png">  <div style="float:right;"><b><p>●●●株式会社　栃木　太郎 様</p></b>
</div>


 <h2><span>発注状況</span></h2>



<div id="search">
<ul>
  <li>   区分
<select name="連絡">
<option value="1"selected>--</option>
<option value="2" >標準品</option>
<option value="3">特注品</option>
<option value="4">経費</option>
</select>
  </li>
 <li>　　</li>
  <li>   営業所
<select name="連絡">
<option value="1"selected>--</option>
<option value="2" >資材</option>
<option value="3">SCM川口</option>
<option value="4">SCM小山</option>
<option value="4">大阪</option>
<option value="4">名古屋</option>
</select>
  </li>
</ul>
</div>

<div id="search_b">
<ul>
  <li>商品コード　<input type="text"></li>
  <li>　　　　</li>
  <li>発注日 <input type="radio"></li>
  <li>要求納期<input type="radio"></li>
  <li>回答納期<input type="radio"></li>
  <li><input type="date"></li>
  <li>～<input type="date"></li>
  <li>　<input type="submit"></li>
</ul>
</div>

<center>
<br />
<div style="float:left; margin-left:30px; font-size:18px;"><p><b>検収済</b><input type="checkbox"></p>
</div>

<div style="float:right; margin-right:30px;"><p><a href=""><button>CSVダウンロード</button></a></p>
</div>
<div style="float:right; margin-right:30px;"><p><a href=""><button>納品書発行</button></a></p>
</div>
<div style="float:right; margin-right:30px;"><p><a href=""><button>納期回答更新</button></a></p>
</div>
<div style="float:right; margin-right:30px;"><p><a href=""><button>画像ダウンロード</button></a></p>
</div>
 <br />


<div id="wrap">
 
    <p id="text"></p>・
 
</div>




<script type="text/javascript" charset="utf-8">
$(".selectBtn").on("click", function(){
 var id = $('div').attr('id');
 
console.log( id );

});
</script>


<div style="margin:0px;padding:0px;" align="center">
<div style="margin:0px;padding:0px;line-height:1.3;">
<div style="margin:0px;padding:10px;line-height:1.3;overflow:auto;text-align:left;height:800px;">


<table width="130%" class="sortable"> 
  <thead>
    <tr>
      <th>
        NO.
      </th>
      <th>
        DWN
      </th>
       <th class="sort_number">
        注文番号
      </th>
       <th class="sort_number">
        商品コード
      </th>
      <th>
        品名
      </th>
      <th>
        品名２
      </th>
      <th>
        型式・材料・寸法 
      </th>
       <th>
        単価
      </th>
      <th>
        金額
      </th>
      <th>
        注文数量
      </th>
      <th>
        単位
      </th>
       <th class="sort_number">
        注文日
      </th>
      <th>
        希望納期
      </th>
      <th colspan="2" class="sort_number">
        回答納期
      </th>
      <th class="sort_number">
        注文残数
      </th>
      <th colspan="2">
        納品予定数
      </th>
       <th>
        納品済数
      </th>
        <th class="sort_number">
        合格数
      </th>
       <th class="sort_number">
        不良数
      </th>
       <th>
        摘要
      </th>
       <th>
        納入先
      </th>
       <th>
       発注者
      </th>
      <th>
        帳票発行
      </th>
      <th>
        図面DL
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        1
      </td>
      <td>
        
      </td>
      <td>
        P0143294
      </td>
      <td>
        1E4103000Z
      </td>
      <td>
        TL03K-3-04
      </td>
      <td>
        TL03K-3-04
      </td>
      <td>
        
      </td>
     <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        50
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2007/06/20
      </td>
      <td >
        2007/2/28
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>

      </td>
      <td>
         <span id="productsname1"><input type="date" value="2007-02-08" style="width:100%; box-sizing: border-box; text-align:right;"></span>
        

      </td>
      <td  style="text-align:right;">
        50
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
        <button type="button" class="selectBtn">分納</button>
      </td>
     <td  style="text-align:right;">
       <span id="productsname1"><input type="number" value="50" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      　　<td>
        SCM小山
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
　　　
 <tr>
      <td>
        1
      </td>
      <td>
        
      </td>
      <td>
        P0143294
      </td>
      <td>
        1E4103000Z
      </td>
      <td>
        TL03K-3-04
      </td>
      <td>
        TL03K-3-04
      </td>
      <td>
        
      </td>
     <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        50
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2007/06/20
      </td>
      <td >
        2007/2/28
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>

      </td>
      <td>
         <span id="productsname1"><input type="date" value="2007-02-08" style="width:100%; box-sizing: border-box; text-align:right;"></span>
        

      </td>
      <td  style="text-align:right;">
        50
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
        <button type="button" class="selectBtn">分納</button>
      </td>
     <td  style="text-align:right;">
       <span id="productsname1"><input type="number" value="50" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      　　<td>
        SCM小山
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>




    </tr>
    <tr>
      <td>
        2
      </td>
      <td  style="text-align:center; color:green;">
        ●
      </td>
      <td>
        P0143293
      </td>
      <td>
        1E4122000Z
      </td>
      <td>
        TL03K-3-40
      </td>
      <td>
        TL03K-3-40
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>

      <td  style="text-align:right;">
        5
      </td>
       <td  style="text-align:center;">
        P
      </td>
   
      <td>
        2007/06/20
      </td>
      <td>
        2007/01/10
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="2007-02-08" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        5
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td  style="text-align:right;">
        <span id="productsname1"><input type="number" value="5" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>

      <td>
        SCM小山
      </td>

      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td> 
      
    </tr>
    <tr>
      <td>
        3
      </td>
      <td>
        
      </td>
      <td>
        P0143291
      </td>
      <td>
        1E4127000Z
      </td>
      <td>
        TL03K-1-08
      </td>
      <td>
        TL03K-1-08
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
     <td  style="text-align:right;">
        1
      </td>
       <td  style="text-align:center;">
        P
      </td>
    
      <td>
        2007/06/20
      </td>
      <td>
        2006/12/08
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="2007-02-08" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
    <td  style="text-align:right;">  
        1
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td  style="text-align:right;">
        <span id="productsname1"><input type="number" value="1" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
            <td>
        SCM小山
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>


    </tr>
    <tr>
      <td>
        4
      </td>
      <td  style="text-align:center; color:green;">
        ●
      </td>
      <td>
        P0143295
      </td>
      <td>
        1E4130000Z
      </td>
      <td>
        TL-03K-K1-08
      </td>
      <td>
        TL-03K-K1-08
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        5
      </td>
       <td  style="text-align:center;">
        P
      </td>
     
      <td>
        2007/06/20
      </td>
      <td>
        2007/03/07
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
     <td  style="text-align:right;">
        5
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
       <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
       <td>
        SCM小山
      </td>

     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
     
    </tr>
    <tr>
      <td>
        5
      </td>
      <td  style="text-align:center; color:green;">
        ●
      </td>
      <td>
        P0143292
      </td>
      <td>
        1E4224000Z
      </td>
      <td>
        TL03K-3M-06
      </td>
      <td>
        TL03K-3M-06
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        2
      </td>
       <td  style="text-align:center;">
        P
      </td>
     
      <td>
        2007/06/20
      </td>
      <td>
        2006/12/19
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        2
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
        <td>
        SCM小山
      </td>
     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
    

    </tr>
    <tr>
      <td>
        6
      </td>
      <td>
        
      </td>
      <td>
        P0393462
      </td>
      <td>
        1C0881000Z
      </td>
      <td>
        TL-310-1
      </td>
      <td>
        TL-310-1
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        500
      </td>
       <td  style="text-align:center;">
        P
      </td>
    
      <td>
        2009/12/10
      </td>
      <td>
        2010/01/29
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        500
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      <td>
        SCM小山
      </td>

      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      
    </tr>
    <tr>
      <td>
        7
      </td>
      <td>
        
      </td>
      <td>
        P0393741
      </td>
      <td>
        1E0260000N
      </td>
      <td>
        TL-91-2
      </td>
      <td>
        TL-91-2
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        5000
      </td>
       <td  style="text-align:center;">
        P
      </td>
     
      <td>
        2009/12/11
      </td>
      <td>
        2010/02/15
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        5000
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      <td>
        SCM小山
      </td>

     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      
    </tr>
    <tr>
      <td>
        8
      </td>
      <td>
        
      </td>
      <td>
        P0710530
      </td>
      <td>
        1E4108000Z
      </td>
      <td>
        TL03K-2-15
      </td>
      <td>
        TL03K-2-15
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        100
      </td>
       <td  style="text-align:center;">
        P
      </td>
    
      <td>
        2013/08/29
      </td>
      <td>
        2013/11/07
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
    <td  style="text-align:right;">
        100
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>

      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      <td>
        SCM小山
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      

    </tr>
    <tr>
      <td>
        9
      </td>
      <td>
        
      </td>
      <td>
        P1098565
      </td>
      <td>
        1E4135001Z
      </td>
      <td>
        TL03K-2-11
      </td>
      <td>
        TL03K-2-11
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        1000
      </td>
       <td  style="text-align:center;">
        P
      </td>
    
      <td>
        2018/05/22
      </td>
      <td>
        2018/09/11
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
     <td  style="text-align:right;">
        1000
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      <td>
        SCM小山
      </td>
    <td  style="text-align:center;">
        <input type="checkbox" >
      </td>

      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      

    </tr>
    <tr>
       <td >
        10
      </td>
      <td>
        
      </td>
      <td>
        P1098537
      </td>
      <td>
        1E4143001Z
      </td>
      <td>
        TL03K-2P-22
      </td>
      <td>
        TL03K-2P-22
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        860
      </td>
       <td  style="text-align:center;">
        P
      </td>

      <td>
        2018/05/22
      </td>
      <td>
        2018/09/11
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
     <td  style="text-align:right;">
        860
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
       <td>
        SCM小山
      </td>

      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
     
    </tr>
    <tr>
      <td>
        11
      </td>
      <td>
        
      </td>
      <td>
        P1098564
      </td>
      <td>
        1E4144001Z
      </td>
      <td>
        TL03K-3P-22
      </td>
      <td>
        TL03K-3P-22
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>

      <td  style="text-align:right;">
        1000
      </td>
       <td  style="text-align:center;">
        P
      </td>
    
      <td>
        2018/05/22
      </td>
      <td>
        2018/09/11
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
     <td  style="text-align:right;">
        1000
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
       <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
       <td>
        SCM小山
      </td>

     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
     
    </tr>
    <tr>
      <td>
        12
      </td>
      <td>
        
      </td>
      <td>
        P1107779
      </td>
      <td>
        1E4122000Z
      </td>
      <td>
        TL03K-3-40
      </td>
      <td>
        TL03K-3-40
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        100
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2018/06/27
      </td>
      <td>
        2018/07/18
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        100
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      <td>
        SCM小山
      </td>

      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      
    </tr>
    <tr>
      <td>
        13
      </td>
      <td>
        
      </td>
      <td>
        P1109460
      </td>
      <td>
        1E4103001Z
      </td>
      <td>
        TL03K-3-04
      </td>
      <td>
        TL03K-3-04
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        200
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2018/07/03
      </td>
      <td>
        2018/08/22
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        100
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      <td>
        SCM小山
      </td>
     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      

    </tr>
    <tr>
      <td>
        14
      </td>
      <td>
        
      </td>
      <td>
        P1109464
      </td>
      <td>
        1E4115001Z
      </td>
      <td>
        TL03K-3-19
      </td>
      <td>
        TL03K-3-19
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
   <td  style="text-align:right;">
        200
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2018/07/03
      </td>
      <td>
        2018/08/22
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
     <td  style="text-align:right;">
        200
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
        <td>
        SCM小山
      </td>

     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
    
    </tr>
    <tr>
      <td>
        15
      </td>
      <td>
        
      </td>
      <td>
        P1109468
      </td>
      <td>
        1E4134001Z
      </td>
      <td>
        TL03K-1-11
      </td>
      <td>
        TL03K-1-11
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
     <td  style="text-align:right;">
        1000
      </td>
       <td  style="text-align:center;">
        P
      </td>
    
      <td>
        2018/07/03
      </td>
      <td id="day01">
        2018/09/04
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
    <td  style="text-align:right;">
        1000
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
      <td>
        SCM小山
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      

    </tr>
    <tr>
      <td>
        16
      </td>
      <td>
        
      </td>
      <td>
        P1109469
      </td>
      <td>
        1E4136001Z
      </td>
      <td>
        TL03K-3-11
      </td>
      <td>
        TL03K-3-11
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        1000
      </td>
       <td  style="text-align:center;">
        P
      </td>

      <td>
        2018/07/03
      </td>
      <td>
        2018/09/04
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        1000
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
       <td>
        SCM小山
      </td>

    <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
     
    </tr>
    <tr>
      <td>
        17
      </td>
      <td>
        
      </td>
      <td>
        P1146124
      </td>
      <td>
        1E4108001Z
      </td>
      <td>
        TL03K-2-15
      </td>
      <td>
        TL03K-2-15
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
       <td  style="text-align:right;">
        100
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2018/12/09
      </td>
      <td>
        2019/02/12
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td  style="text-align:right;">
        100
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
       <td>
        SCM小山
      </td>

    <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
     
          </tr>
    <tr>
      <td>
        18
      </td>
      <td>
        
      </td>
      <td>
        P1146127
      </td>
      <td>
        1E4128001Z
      </td>
      <td>
        TL03K-2-08
      </td>
      <td>
        TL03K-2-08
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
     <td  style="text-align:right;">
        150
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2018/12/09
      </td>
      <td>
        2019/03/08
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        150
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button> <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
       <td>
        SCM小山
      </td>
     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
     

    </tr>
    <tr>
      <td>
        19
      </td>
      <td>
        
      </td>
      <td>
        P1146129
      </td>
      <td>
        1E4129001Z
      </td>
      <td>
        TL03K-3-08
      </td>
      <td>
        TL03K-3-08
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
      <td  style="text-align:right;">
        200
      </td>
      <td  style="text-align:center;">
        P
      </td>
      <td>
        2018/12/09
      </td>
      <td>
        2019/04/09
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
      <td  style="text-align:right;">
        200
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
        <td>
        SCM小山
      </td>
     <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
    

    </tr>
    <tr>
      <td>
        20
      </td>
      <td>
        
      </td>
      <td>
        P1147976
      </td>
      <td>
        1B0451000O
      </td>
      <td>
        TL-210-1
      </td>
      <td>
        TL-210-1
      </td>
      <td>
        
      </td>
       <td  style="text-align:right;">
        1810
      </td>
     <td  style="text-align:right;">
        90500
      </td>
       <td  style="text-align:right;">
        5000
      </td>
       <td  style="text-align:center;">
        P
      </td>
      <td>
        2018/12/17
      </td>
      <td>
        2019/03/07
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
      </td>
      <td>
        <span id="productsname1"><input type="date" value="" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
     <td  style="text-align:right;">
        5000
      </td>
      <td>
        <button type="button" class="selectBtn">copy</button>
         <button type="button" class="selectBtn">分納</button>
      </td>
      <td>
        <span id="productsname1"><input type="number" value="0" style="width:100%; box-sizing: border-box; text-align:right;"></span>
      </td>
       <td>
        
      </td>
      <td>
        
      </td>
      <td>
        
      </td>
      <td>
        資材からコメント
      </td>
      <td>
        納入先会社名
      </td>
       <td>
        SCM小山
      </td>
    <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
      <td  style="text-align:center;">
        <input type="checkbox" >
      </td>
     

    </tr>
  </tbody>
</table>

<div><div><div>


<div style="float:center; "　><p><a href=""><button>　更　新　</button></a></p>
</div>
<br>
<ul class="pageNav03" style="center">
<li><a href="1.html">&laquo; 前</a></li>
<li><a href="1.html">1</a></li>
<li><a href="3.html">2</a></li>
<li><a href="4.html">3</a></li>
<li><a href="3.html">次 &raquo;</a></li>
</ul>
    <hr>
    <p style="float:right;"><a href="./login.html">ログアウト</a></p>

</div>


</body>
</html>
