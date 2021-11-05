
<?php
$to = "hello@gtsolution.nl, alex@gtsolution.nl";
$subject = "App en Webcreatie's formulier";

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$street = $_POST["street"];
$state = $_POST["state"];
$postalcode = $_POST["postalcode"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$contact_person = $_POST["contact_person"];
$already_own_website = $_POST["already_own_website"];
$current_webhosting = $_POST["current_webhosting"];
$description_organisation = $_POST["description_organisation"];
$focus = $_POST["focus"];

$where_working = '';
foreach ($where_work as $value) {
    $where_working .= $value . ' ';
}

$target = $_POST["target"];
$achieve_new_website = $_POST["achieve_new_website"];

$own_logos = '';
foreach ($own_logo as $value) {
    $own_logos .= $value . ' ';
}

$file = $_POST["file"];
$high_resolution = $_POST["high_resolution"];
$new_logo = $_POST["new_logo"];
$letter_type = $_POST["letter_type"];
$colors = $_POST["colors"];
$color_code = $_POST["color_code"];
$slogan_website = $_POST["slogan_website"];
$website_webshop = $_POST["website_webshop"];
$structure_website = $_POST["structure_website"];

$responsivity = '';
foreach ($responsive as $value) {
    $responsivity .= $value . ' ';
}

$favourite_website = $_POST["favourite_website"];

$cms_cms = '';
foreach ($cms as $value) {
    $cms_cms .= $value . ' ';
}

$type_cms = $_POST["type_cms"];
$blog_website = $_POST["blog_website"];

$reactions = '';
foreach ($reaction as $value) {
    $reactions .= $value . ' ';
}

$own_content = $_POST["own_content"];
$own_foto = $_POST["own_foto"];
$who_website = $_POST["who_website"];

$updates = '';
foreach ($update as $value) {
    $updates .= $value . ' ';
}

$social_medias = '';
foreach ($social_media as $value) {
    $social_medias .= $value . ' ';
}

$maintenance = $_POST["maintenance"];
$website_functions = $_POST["website_functions"];
$decision = $_POST["decision"];
$it_specialist = $_POST["it_specialist"];
$more_involved = $_POST["more_involved"];
$ideas = $_POST["ideas"];
$communicate = $_POST["communicate"];
$other_cases = $_POST["other_cases"];

$message= '
<html>
<head>
<title>HTML email ( App en webcreatie formulier )</title>
</head>
<body>
<table>
<tr>
<th>Voornaam</th>
<th>Achternaam</th>
<th>Straat en huisnummer</th>
<th>Plaats</th>
<th>Staat / Provincie</th>
<th>Postcode</th>
<th>Telefoonnummer</th>
<th>email</th>
<th>Telefoon contactpersoon</th>
<th>Heb je al een website? Zo ja, wat is je URL?</th>
<th>Wie is je huidige webhosting bedrijf? ( indien van
toepassing)</th>
<th>Geef een omschrijving van je bedrijf of organisatie.</th>
<th>Richt jou bedrijf zich op consumenten of bedrijven?</th>
<th>Werk je alleen in Nederland of ook daarbuiten?</th>
<th>Wie of wat is je doelgroep?</th>
<th>Wat wil je met je nieuwe website bereiken?</th>
<th>Heb je al een logo / huisstijl?</th>
<th>Upload hier een voorbeeld van je logo / huisstijl.</th>
<th>Beschik je zelf over foto/reclame materiaal in hoge resolutie?</th>
<th>Overweeg je een nieuw logo?</th>
<th>Gebruik je al een bepaald lettertype? Zo ja, welke?</th>
<th>Zijn er kleuren die je op wilt nemen in je website?</th>
<th>Beschik je over de kleurnummers?</th>
<th>Heb je al een slogan of slagzin?</th>
<th>Heb je voldoende aan een website of wil je ook een webshop?</th>
<th>Weet je al hoe de structuur van je website eruit moet gaan
zien?</th>
<th>Wil je een website die zich zelf aanpast aan meerdere apparaten? (Zg.
responsief webdesign)</th>
<th>Heb jij zelf momenteel een favoriete website? Of een die je er echt
lelijk vindt?</th>
<th>Wordt jou site gemanaged met een content management systeem (CMS)?</th>
<th>Weet je welk type CMS?</th>
<th>Wil je een blog koppelen aan je website?</th>
<th>Moeten mensen een reactie achter kunnen laten op je website?</th>
<th>>Beschik jij zelf over content ( tekst) voor je website? Of lever je dit
zelf aan?</th>
<th>Beschik jezelf over foto/ videomateriaal voor je website?</th>
<th>Wie gaat je website onderhouden?</th>
<th>Hoe vaak (verwacht je) wordt de website geüpdatet?</th>
<th>Maak je al gebruik van Social Media? Zo ja, geef aan welke.</th>
<th>Wil je het onderhoud van je Social Media uitbesteden?</th>
<th>Zijn er nog andere website functies die je gebruiken wilt?</th>
<th>Wie nemen binnen jou organisatie beslissingen over de website?</th>
<th>Is er een IT specialist binnen de organisatie waarmee wij
samenwerken?</th>
<th>Zijn er nog meer mensen betrokken bij de website en mogen deze ook
beslissingen nemen hierover? Zou je hier dan de naam en functie van deze personen willen
vermelden?</th>
<th>Heb je al ideeën om je nieuwe website te promoten?</th>
<th>Communiceer je momenteel ( naast event. social media) op nog een andere
wijze met je doelgroep?</th>
<th>Zijn er nog andere zaken die voor jou belangrijk zijn of waar wij rekening
mee zouden moeten houden?</th>

</tr>
<tr>
<td>'. $fname .'</td>
<td>'. $lname .'</td>
<td>'. $street .'</td>
<td>'. $state .'</td>
<td>'. $postalcode .'</td>
<td>'. $phone .'</td>
<td>'. $email .'</td>
<td>'. $contact_person .'</td>
<td>'. $already_own_website .'</td>
<td>'. $current_webhosting .'</td>
<td>'. $description_organisation .'</td>
<td>'. $focus .'</td>
<td>'. $where_working .'</td>
<td>'. $target .'</td>
<td>'. $achieve_new_website .'</td>
<td>'. $own_logos .'</td>
<td>'. $file .'</td>
<td>'. $high_resolution .'</td>
<td>'. $new_logo .'</td>
<td>'. $letter_type .'</td>
<td>'. $colors .'</td>
<td>'. $color_code .'</td>
<td>'. $slogan_website .'</td>
<td>'. $website_webshop .'</td>
<td>'. $structure_website .'</td>
<td>'. $responsivity .'</td>
<td>'. $favourite_website .'</td>
<td>'. $cms_cms .'</td>
<td>'. $type_cms .'</td>
<td>'. $blog_website .'</td>
<td>'. $reactions .'</td>
<td>'. $own_content .'</td>
<td>'. $own_foto .'</td>
<td>'. $who_website .'</td>
<td>'. $updates .'</td>
<td>'. $social_medias .'</td>
<td>'. $maintenance .'</td>
<td>'. $website_functions .'</td>
<td>'. $decision .'</td>
<td>'. $it_specialist .'</td>
<td>'. $more_involved .'</td>
<td>'. $ideas .'</td>
<td>'. $communicate .'</td>
<td>'. $other_cases .'</td>
</tr>
</table>
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = 
'Content-type:text/html;charset=UTF-8' . '\r\n'.
'From: ' . $email . "\r\n" .
'Reply-To: ' . $email . "\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $message, $headers);  
?>  
