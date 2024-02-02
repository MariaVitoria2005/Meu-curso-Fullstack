async function vamBora(arquivo,id){
    let vamos = await fetch(arquivo)
    let oceano = await vamos.txt()

    document.getElementById(id).textContent = oceano
}
vamBora("viagem.txt","viagem")
vamBora("casa.txt","carros")



