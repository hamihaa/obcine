<?php include_once "header.php" ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Več o projektu </title>
</head>
<div class="row" style="margin:2%">
<h2> O projektu </h2>
  <p style="font-size: 120%"> Spletišče Vizualizacija primerjave odhodkov potrebnih za delovanje občine za leto 2015 je končni produkt seminarske naloge pri predmetu Informacijski sistemi v javni upravi na Fakulteti za upravo. Je rešitev izziva postavljenega s strani Ministrstva za finance in sicer izdelati prikaz oziroma primerjavo odhodkov potrebnih za delovanje občine med posameznimi občinami. Na spletišču je mogoče videti odhodke posameznih občin ali pa po klasifikacijah primerjati občine med seboj. Na strani vsake občine je poleg njenih odhodkov navedeno tudi slovensko povprečje za klasifikacije prav tako pa je prikazano njeno mesto po porabi med vsemi 212 občinami.
   <br>
  Poleg primerjave po občinah pa smo dodali primerjavo po regijah, kjer so razvidni enaki podatki kot pri občinah. Upoštevali smo razdelitev Slovenije na 12 regij kot jih navaja Statistični urad republike Slovenije.</p>

  <h3>Uporabljeni podatki</h3>
  <div class="col-sm-6" style="font-size: 110%">
   Vir podatkov je Poročilo o odhodkih in drugih izdatkih po programski klasifikaciji, dosegljivo na <a href= "http://www.mf.gov.si/si/delovna_podrocja/lokalne_skupnosti/statistika/podatki_obcin_o_realiziranih_prihodkih_in_drugih_prejemkih_ter_odhodkih_in_drugih_izdatkih_splosnega_dela_proracuna_ter_o_realiziranih_odhodkih_in_drugih_izdatkih_posebnega_dela_proracuna" style="color:#1c69b1" />povezavi</a>. 
    V poročilu se nahaja 6 kontnih skupin odhodkov, te so: 
<ul style="list-style-type:disc"> 
<li>odplačila dolga (55)</li>
<li>dana posojila in povečanje kapitalskih deležev (44)</li>
<li>investicijski transferi (43)</li>
<li>investicijski odhodki (42)</li>
<li>tekoči transferi (41)</li>
<li>tekoči odhodki (40)</li>   
</ul>

Vsaka kont skupina ima 23 klasifikacijskih področij. Za odhodke, ki so potrebni za delovanje občin Ministrstvo za finance navaja 10 klasifikacij. Za vsako klasifikacijo je bilo potrebno je bilo sešteti stroške kontnih skupin. Da pa bi bili podatki primerljivi med seboj, je seštevek potrebno deliti s številom prebivalstva občine. 
  </div>

<h4>Klasifikacije:</h4>

<div class="col-sm-6" >

  <ul> 
<li><b> 01 POLITIČNI SISTEM </b></li>
<li><b>02 EKONOMSKA IN FISKALNA ADMINISTRACIJA</b> </li>
<li><b> 03 ZUNANJA POLITIKA IN MEDNARODNA POMOČ,</b> brez 0303 MEDNARODNA POMOČ
<li><b> 04 SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE</b></li>
<li><b> 05 ZNANOST IN TEHNOLOŠKI RAZVOJ</b> - brez tekočih transferov</li>
<li><b> 06 LOKALNA SAMOUPRAVA</b></li>
<li><b> 07 OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH</b></li>
<ul>
    <li> 0703 VARSTVO PRED NARAVNIMI IN DRUGIMI NESREČAMI - brez tekočih in investicijskih transferov</li>
</ul>
   
<li><b> 08 NOTRANJE ZADEVE IN VARNOST</b></li>
<li><b> 10 TRG DELA IN DELOVNI POGOJI</b>
    <ul>
    <li>1003  AKTIVNA POLITIKA ZAPOSLOVANJA – brez tekočih transferov</li>
    </ul>
</li> 
<li><b> 14 GOSPODARSTVO</b></li>
    <ul> 
    <li> 1403 PROMOCIJA SLOVENIJE, RAZVOJ TURIZMA IN GOSTINSTVA – brez investicijskih odhodkov, tekočih in investicijskih transferov </li>
    <li> 14039001 PROMOCIJA OBČINE – brez investicijskih odhodkov, tekočih in investicijskih transferov </li>
    <li> 14039002 SPODBUJANJE RAZVOJA GOSTINSTVA IN TURIZMA – brez investicijskih odhodkov, tekočih in investicijskih transferov </li>
    </ul>
</ul>
</div>

</div>
<?php include_once "footer.php" ?>
