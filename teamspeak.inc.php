<h2 class="title">TeamSpeak</h2>
<p>Na Gameserveru běží teamspeak server verze 3. Pokud se chcete připojit, použijte adresu <strong>ts.hkfree.org</strong>.</p>
<p>Jestliže chcete využívat teamspeak pro svůj klan, napište někomu ze server administrátorů o vytvoření místnosti. Pokud by nikdo nebyl zrovna online, počkejte a nebo napište někomu ze sekce Kontakt.</p>

<h3 class="title2">Aktuální místnosti a hráči online</h3>
<br>
<p id="tsstatus">
Nahrává se...
</p>

<script type="text/javascript">
function loadstatus()
{
  $.get('ts3/ts.php', { s: "all" }, function(data) {
    $('#tsstatus').html(data);
  });
  setTimeout("loadstatus()", 20000);
}
loadstatus();
</script>