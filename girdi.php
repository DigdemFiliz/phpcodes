<html>
<body>
<form name="girdi" method="post" action="islem.php">
Birinci Sayı: <input type="text" name="sayi1"><br>
İkinci Sayi:<input type="text" name="sayi2"><br>
      İşleminizi seçiniz:
      <select name="islem">
         <option value="+">Topla</option>
         <option value="-">Çıkar</option>
         <option value="*">Çarp</option>
         <option value="/">Böl</option>
      </select><br>
	  <!--button oluşturulur.-->
<input type="submit" name="islemyap" value="islemyap">


</form>
</body>

</html>