function printing(link) {
    $("<iframe class='printpage'>") // create a new iframe element
        .attr("src", 'print.php?id='+link) // point the iframe to the page link you want to print
        .appendTo("body");
}