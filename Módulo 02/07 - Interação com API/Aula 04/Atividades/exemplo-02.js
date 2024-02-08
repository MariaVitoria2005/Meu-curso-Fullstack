let produto01="https://www.magazineluiza.com.br/fritadeira-eletrica-sem-oleo-air-fryer-mondial-family-afn-40-bi-preto-4l-com-timer/p/228887000/ep/efso/"
async function procurar(){
    let resposta=await fetch(produto01)
    let produto01 =await resposta.json()
    console.log(produto01)
    focus(let loja in produtos){
        inserirProduto.innerHTML += `
        <li class="produtos__item">
            <div class="produtos__content">
                <img src="${resposta[loja].img}" alt="Imagem de celular">
                <div class="produtos__informacoes">
                    <h3>${produtos[loja].nome}</h3>
                    <p>${produtos[loja].descricao}</p>
                    
                    <h4>R$ ${produtos[loja].valorComDesconto}<s>R$ ${produtos[loja].valorSemDesconto}</s></h4>
                    <p>${produtos[loja].tipoEntrega}</p>
                </div>
            </div>
        </li>
        `;
    }
}


    

