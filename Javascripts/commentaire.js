function ComentaiPOST(event)
{
    
    if(event.target.value.trim() != '')
    {
        document.querySelector('.leftnav.comentaireInoput i').style.display = 'flex';
    }else{
        document.querySelector('.leftnav.comentaireInoput i').style.display = 'none';
    }
    
}