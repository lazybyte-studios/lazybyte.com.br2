document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.changelog')) {
    /**
     * Busca o conteúdo de um arquivo e substitui o conteúdo de um elemento específico com os dados obtidos.
     *
     * @param {string} filename - O nome do arquivo a ser buscado.
     * @return {void} Esta função não retorna nada.
     */
        function file_get_contents(filename) {
            fetch(filename).then((resp) => resp.text()).then(data => {
                // Optional, replace the H1 heading with nothing,
                // as I do not need it on my static website

                /*

                    A expressão regular é definida entre barras /.../ e contém os seguintes elementos:
                    <h1>: a tag HTML <h1>.
                    (.*?): um grupo de captura que corresponde a qualquer caractere zero ou mais vezes, mas o mínimo possível.
                    <\/h1>: a tag HTML de fechamento </h1>.
                    ig: as flags i e g são usadas para tornar a correspondência insensível a maiúsculas e minúsculas (i) e para substituir todas as ocorrências da expressão regular na string (g).

                */
                 
                data = data.replace(/<h1>(.*?)<\/h1>/ig, "");

                // Initialize the document parser
                const parser = new DOMParser();
                let doc = parser.parseFromString(data, 'text/html');

                // Get the <body> element content
                let body = doc.querySelector('body').innerHTML;

                // Replace my empty element with the retrieved content
                document.querySelector('.changelog').innerHTML = body;
            });
        }

        // Call the function and point it to my GitHub Pages page
        file_get_contents('https://mypage.github.io/path/to/changelog');
    }
});