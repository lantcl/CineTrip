
<?php
//submit interests to users-interests table
$stmt = $pdo->prepare("INSERT INTO `users-interests` (`articleid`, `articletitle`, `articleauthor`, `articlebody`, `articleimage`, `articlecat-industry`, `articlecat-technical`, `articlecat-career`, `articledate`, `articlesummary`) VALUES (NULL, '$articletitle', '$articleauthor', '$articlebody', '$filename', '$industry', '$technical', '$career', '$articledate', '$articlesummary') AND ();");

$stmt1->execute();

?>