/* PARTE 1 */



/* PARTE 2 */
document.addEventListener("DOMContentLoaded", function () {
    // Função para calcular a soma das C1V
    function calcularSomaC1V() {
        var cells = document.getElementsByClassName("C1V");
        var soma = 0;
        for (var i = 0; i < cells.length; i++) {
            var cellText = cells[i].textContent;
            soma += parseFloat(cellText.replace(",", "."));
        }
        return soma;
    }

    // Função para calcular e atualizar os valores automaticamente
    function atualizarValores() {
        var somaC1V = calcularSomaC1V();
        var resultadoC2V1 = somaC1V;
        var resultadoC2V2 = resultadoC2V1 * 1.25;
        var resultadoC2V3 = resultadoC2V2 * 3;
        var valorC2V4 = parseFloat(document.getElementById("C2V4").value.replace(",", "."));
        var resultadoC2V5 = resultadoC2V3 / valorC2V4;
        var valorC2V6 = parseFloat(document.getElementById("C2V6").value.replace(",", "."));
        var resultadoC2V7 = resultadoC2V5 + valorC2V6;

        document.getElementById("C2V1").value = resultadoC2V1.toFixed(2);
        document.getElementById("C2V2").value = resultadoC2V2.toFixed(2);
        document.getElementById("C2V3").value = resultadoC2V3.toFixed(2);
        document.getElementById("C2V5").value = resultadoC2V5.toFixed(2);
        document.getElementById("C2V7").value = resultadoC2V7.toFixed(2);
    }

    // Adicione um evento que chama a função para atualizar os valores sempre que ocorrer uma alteração em C2V4 ou C2V6
    document.getElementById("C2V4").addEventListener("input", atualizarValores);
    document.getElementById("C2V6").addEventListener("input", atualizarValores);

    // Chame a função para atualizar os valores inicialmente
    atualizarValores();
});
