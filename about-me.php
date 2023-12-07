<?php 

session_start();

include_once('scripts/php/tell-me-about-immersion-form.php'); 

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <title>Immersion - Über mich</title>
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
    <?php if (has_error()): ?>
    <section class="error">
        <p><?php echo get_error_message(); ?></p>
    </section>
    <?php endif; ?>
    <?php if (has_success_message()): ?>
    <section class="success">
        <p><?php echo get_success_message(); ?></p>
    </section>
    <?php endif; ?>
    <?php include_once('partials/header.php'); ?>
    <section class="centered-two-text-columns">
        <div>
            <p class="uppercase text-right centered-two-text-columns-title">Über mich</p>
            <img src="/assets/images/me.jpeg" alt="A picture showing Anouk smiling." class="about-me-image">
        </div>
        <div>
            <p>
                Hi! Mein Name ist Anouk Rudin. Im Rahmen des Auftrags von IM5 meines Studiums (MultimediaProduction and
                der Fachhochschule Graubünden) habe ich die Webseite erstellt, welche du dir gerade ansiehst. Der Grund
                der Thematik liegt darin, dass ich als Bachelorarbeit immersive Raumgestaltung untersuchen will. Das
                Aufstellen dieser Webseite hat mir geholfen, mehr Klarheit in das doch relativ komplexe Thema zu
                kriegen. Ich hoffe, dir gehts genauso!
            </p>
            <p>
                Wenn ich nicht gerade neue Begriffe anhand einer Webseite versuche zu verstehen, arbeite ich hinter der
                Bar und türtle meine neuste Negroni Adaption aus. Ich liebe die analoge Fotografie und finde, jede*r
                sieht auf einem entwickelten Film einfach besser aus. Ansonsten vergrab ich mich gerne in Bücher oder
                führe Debatten über die Wichtigkeit von Pfeffer. In meinem Studium beschäftige ich mich am liebsten mit
                kreativen oder organisatorischen Fragen.
            </p>
        </div>
    </section>
    <section class="centered-single-text-column">
        <div>
            <p class="big-text text-right text-red uppercase">Meine Art der<br>Immersion</p>
        </div>
    </section>
    <section class="centered-single-text-column">
        <div>
            <p>
                ...sieht immer wieder anders aus. Ich bin eine schuldige Träumerin und versinke gerne mal in den kleinen
                Momenten. Die krasseste Immersion die mir aber gerade in den Sinn kommt, habe ich während des Lesens von
                "Verblendung" von Stieg Larsson erlebt. Ich war völlig von der Welt und der Geschichte in den Bann
                gezogen. Und was ist mit dir?
            </p>
        </div>
    </section>
    <section class="centered-single-text-column">
        <div>
            <p class="big-text text-center text-red uppercase">Was ist Immersion<br>für dich?</p>
        </div>
    </section>
    <section class="centered-single-text-column">
        <div>
            <form method="post" action="/about-me.php">
                <input type="text" name="name" placeholder="Dein Name"
                    value="<?php echo submitted_form_value('name'); ?>">
                <textarea name="immersion-for-you"
                    placeholder="Was ist Immersion für dich..."><?php echo submitted_form_value('immersion-for-you'); ?></textarea>
                <div class="text-right">
                    <button type="submit">Absenden</button>
                </div>
            </form>
            <?php foreach(get_all_entries() as $row): ?>
            <div class="feedback">
                <p class="title"><?php echo $row['name']; ?> schrieb am <?php echo $row['creation_time']; ?>:</p>
                <p><?php echo $row['feedback']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php include_once('partials/footer.php'); ?>
</body>

<script src="/assets/js/app.js"></script>

</html>