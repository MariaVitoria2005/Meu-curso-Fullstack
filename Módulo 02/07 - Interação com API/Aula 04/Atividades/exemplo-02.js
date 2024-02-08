let produto01="https://raw.githubusercontent.com/MariaVitoria2005/Meu-curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Aula%2004/Atividades/exemplo-02.json"
async function procurar(){
    let resposta=await fetch(produto01)
    let loja =await resposta.json()
    console.log(loja)
    for(let celular in loja){
        document.body.innerHTML += `
        <div class="produtos__item">
            <div class="produtos__content">
                <img src="${loja[celular].img}" 
                <div class="produtos__informacoes">
                    <p>${loja[celular].nome}</p>
                    <h4>R$ ${loja[celular].valorComDesconto}<s>R$ ${loja[celular].valorSemDesconto}</s></h4>
                    <p>${loja[celular].tipoEntrega}</p>
                </div>
            </div>
        </div>
        `;
    }
}
procurar()