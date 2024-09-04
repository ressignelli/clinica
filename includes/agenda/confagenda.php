<html>

    <?php
        include('../medico/agendamed.php');

     ?>

        <center><strong>
        <h1>Configuração de Agenda de Consulta</h1>
<hr>
        <form id="form1" method="POST" action="salva_ag_consulta.php">
            <div>
<br>
                <label>Data Inicial: </label>
                <input type="date" name="datainicial" id="datainicial"><br><br>
                <label>Data Final:   </label>
                <input type="date" name="datafinal" id="datafinal">
<br><hr><br>
                <label>Horários para Disponibilizar: </label>
            <br><br>
                    <div>
                        <label><input type="checkbox" name="hora700" value="1"> 7h</label> |
                        <label><input type="checkbox" name="hora730" value="1"> 7:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora800" value="1"> 8h</label> |
                        <label><input type="checkbox" name="hora830" value="1"> 8:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora900" value="1"> 9h</label> |
                        <label><input type="checkbox" name="hora930" value="1"> 9:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1000" value="1"> 10h</label> |
                        <label><input type="checkbox" name="hora1030" value="1"> 10:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1100" value="1"> 11h</label> |
                        <label><input type="checkbox" name="hora1130" value="1"> 11:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1200" value="1"> 12h</label> |
                        <label><input type="checkbox" name="hora1230" value="1"> 12:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1300" value="1"> 13h</label> |
                        <label><input type="checkbox" name="hora1330" value="1"> 13:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1400" value="1"> 14h</label> |
                        <label><input type="checkbox" name="hora1430" value="1"> 14:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1500" value="1"> 15h</label> |
                        <label><input type="checkbox" name="hora1530" value="1"> 15:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1600" value="1"> 16h</label> |
                        <label><input type="checkbox" name="hora1630" value="1"> 16:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1700" value="1"> 17h</label> |
                        <label><input type="checkbox" name="hora1730" value="1"> 17:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1800" value="1"> 18h</label> |
                        <label><input type="checkbox" name="hora1830" value="1"> 18:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora1900" value="1"> 19h</label> |
                        <label><input type="checkbox" name="hora1930" value="1"> 19:30h</label>
                    </div>
                    <div>
                        <label><input type="checkbox" name="hora2000" value="1"> 20h</label> |
                        <label><input type="checkbox" name="hora2030" value="1"> 20:30h</label>
                    </div>
                </strong>
            </div>
            <br><hr><br>
            <button type="submit">Gravar</button>
            <button type="">Cancelar</button>
        </form></center>

</html>