function ouvrirFermerSpoiler(div) {
    var divContenu = div.getElementsByTagName('div')[0];
    if(divContenu.style.display == 'none') {
        divContenu.style.display = 'block';
    } else {
        divContenu.style.display = 'none';
    }
}