<html>
     <form action="?page=creating" method="POST">
    
        <label for="name">Question </label>
        <input type="text" name="question" id="Question" required>
   <br><br>

        <label for="Choix1">Choix 1 </label>
        <input type="text" name="choice1" id="Choix1" required>
        <br><br>

        <label for="Choix2">Choix 2 </label>
        <input type="text" name="choice2" id="Choix2" required>
        <br><br>

        <label for="ending_date">Fin du sondage :</label>
        <input type="datetime-local" name="ending_date">
    
    <br><br>
     <button name="create">Creer Sondage</button>
     </form>
</html>