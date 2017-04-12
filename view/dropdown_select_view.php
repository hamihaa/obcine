<p>Izberi kriterij odhodkov</p>
<form class= "form-inline" action="" method="post">
    <input name="id" type="hidden" value="<?= $obcina["ID"]?>">
    <select name="drop" class="form-control form-inline input-small" style="width:30%">
        <option value="01">01 POLITIČNI SISTEM</option>
        <option value="02">02 EKONOMSKA IN FISKALNA ADMINISTRACIJA</option>
        <option value="03">03 ZUNANJA POLITIKA IN MEDNARODNA POMOČ</option>
        <option value="04">04 SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE</option>
        <option value="05">05 ZNANOST IN TEHNOLOŠKI RAZVOJ</option>
        <option value="06">06 LOKALNA SAMOUPRAVA</option>
        <option value="07">07 OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH</option>
        <option value="08">08 NOTRANJE ZADEVE IN VARNOST</option>
        <option value="10">10 TRG DELA IN DELOVNI POGOJI</option>
        <option value="14">14 GOSPODARSTVO</option>
    </select> <button type="submit" class="btn btn-primary">prikaži podatke</button>
</form>