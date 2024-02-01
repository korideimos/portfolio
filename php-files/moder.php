<?php

if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "accept":
            $sql = "UPDATE guestbook SET vision='1' WHERE id=" . $_GET["id"];
            // print($sql);
            mysqli_query($db, $sql);
            break;
        case "delete":
            $sql = "UPDATE guestbook SET vision='0' WHERE id=" . $_GET["id"];
            // print($sql);
            mysqli_query($db, $sql);
            break;

        case "fav":
            $sql = "UPDATE guestbook SET vision='2' WHERE id=" . $_GET["id"];
            // print($sql);
            mysqli_query($db, $sql);
            break;
        case "edit":
            print('
            <form action="index.php?page=moder&action=editplus&id=' . $_GET["id"] . '" method="POST" class="hidden">
                      <p> Имя: <input type="text" name="uname" value="' . $_GET["username"] . '"/><br />
                      Статус: <input type="text" name="userstatus" value="' . $_GET["userstatus"] . '"/><br />
                      Сообщение: <input type="text" name="umessage" value="' . $_GET["message"] . '"/>
          
                      <p><input type="submit"></p>
                  </form>');
            break;
        case "editplus":
            $sql = "UPDATE guestbook SET username='" . $_POST["uname"] . "', userstatus='" . $_POST["userstatus"] . "', message='" . $_POST["umessage"] . "' WHERE id=" . $_GET["id"];
            // print($sql);
            mysqli_query($db, $sql);
            break;
    }
}
?>



<h2>Резюме</h2>
<h3>Основная информация</h3>
<form action="index.php?page=staf&action=comment&" method="POST">
    <p>Название вакансии</p>
    <input type="text" name="jobname" value="веб-дизайнер" /><br />
    <textarea name="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias esse ipsum sint voluptatibus soluta eius corrupti odit dolorum hic, modi aut nostrum ducimus, accusantium aspernatur sapiente officia?></textarea><br />
    <input type="submit">
</form>
<h3>Опыт работы</h3>
<table>
    <tr>
        <td>Место работы</td>
        <?php
        print("<td>" . '<a href="index.php?page=moder&action=accept&id=' . $i['id'] . '"> &#9745; </a></td>'); //подтвердить
        print("<td>" . "<a href='index.php?page=moder&action=delete&id=" . $i['id'] . "'>&#9746;</a>" . "</td>"); //удалить
        print("<td>" . $i['vision'] . "</td>");
        ?>
    </tr>
</table>
<h3>Образования</h3>
<table>
    <tr>
        <td>Место учебы</td>
        <?php
        print("<td>" . '<a href="index.php?page=moder&action=accept&id=' . $i['id'] . '"> &#9745; </a></td>'); //подтвердить
        print("<td>" . "<a href='index.php?page=moder&action=delete&id=" . $i['id'] . "'>&#9746;</a>" . "</td>"); //удалить
        print("<td>" . $i['vision'] . "</td>");
        ?>
    </tr>
</table>
<h3>Курсы</h3>
<table>
    <tr>
        <td>Название курса</td>
        <?php
        print("<td>" . '<a href="index.php?page=moder&action=accept&id=' . $i['id'] . '"> &#9745; </a></td>'); //подтвердить
        print("<td>" . "<a href='index.php?page=moder&action=delete&id=" . $i['id'] . "'>&#9746;</a>" . "</td>"); //удалить
        print("<td>" . $i['vision'] . "</td>");
        ?>
    </tr>
</table>

<h2>Портфолио</h2>
<h3>Интересы</h3>
<table>
    <tr>
        <td>Тег</td>
        <?php
        print("<td>" . '<a href="index.php?page=moder&action=accept&id=' . $i['id'] . '"> &#9745; </a></td>'); //подтвердить
        print("<td>" . "<a href='index.php?page=moder&action=delete&id=" . $i['id'] . "'>&#9746;</a>" . "</td>"); //удалить
        print("<td>" . $i['vision'] . "</td>");
        ?>
    </tr>
</table>
<h3>Кейсы</h3>
<table>
    <tr>
        <td>Название кейса</td>
        <?php
        print("<td>" . '<a href="index.php?page=moder&action=accept&id=' . $i['id'] . '"> &#9745; </a></td>'); //подтвердить
        print("<td>" . "<a href='index.php?page=moder&action=delete&id=" . $i['id'] . "'>&#9746;</a>" . "</td>"); //удалить
        print("<td>" . "<a href='index.php?page=moder&action=fav&id=" . $i['id'] . "'>&#10694;</a>" . "</td>"); //лучший
        print("<td>" . $i['vision'] . "</td>");
        ?>
    </tr>
</table>

<h2>Комментарии</h2>
<h3>Название проекта</h3>
<table>
    <?php
    print("<tr>");
    print("<td>" . $mdate . "&nbsp;&nbsp;&nbsp;" . $username . ", " . $userstatus . ": " . $message . "</td>");
    print("<td>" . '<a href="index.php?page=moder&action=accept&id=' . $i['id'] . '"> &#9745; </a></td>'); //подтвердить
    print("<td>" . "<a href='index.php?page=moder&action=delete&id=" . $i['id'] . "'>&#9746;</a>" . "</td>"); //удалить
    print("<td>" . "<a href='index.php?page=moder&action=edit&id=" . $i['id'] . "&username=" . $i['username'] . "&userstatus=" . $i['userstatus'] .  "&message=" . $i['message'] . "'>&#10002;</a>" . "</td>"); //редактировать
    print("<td>" . $i['vision'] . "</td>");
    print("</tr>");
    ?>
</table>