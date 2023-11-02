<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:    </td><td><?=cPalabras($_REQUEST['comentario'])?></td></tr>
<tr><td>Letra + repetida:  </td><td>a</td></tr>
<tr><td>Palabra + repetida:</td><td><?=palabraMasRepetidaf($_REQUEST['comentario'])?></td></tr>
</table>
</div>

