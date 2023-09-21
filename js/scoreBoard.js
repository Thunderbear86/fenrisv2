export default class ScoreBoard {
    createScoreboard() {
        const scoreboard = document.getElementById("scoreboard");
        let html = `
        <table class="table">
            <thead>
                <tr>
                    <th>Score for spiller:</th>
                </tr>
            </thead>
            <tbody id="scoreTable">
        `;

        for (let i = 1; i <= 18; i++) {
            html += `
                <tr>
                    <td>
                        
                            <div class="input-group">
                                <button class="btn btn-primary" type="button" id="subtract${i}">-</button>
                                <input type="number" id="hole${i}" class="form-control" min="0" value="0" inputmode="none">
                                <button class="btn btn-primary" type="button" id="add${i}">+</button>
                            </div>
                       
                    </td>
                </tr>
            `;
        }

        html += `
            </tbody>
        </table>
        <div class="mt-3">
            <button class="btn btn-danger" id="startOver">Start Forfra</button>
            <button class="btn btn-secondary" id="reset">Reset</button>
        </div>
        `;

        scoreboard.innerHTML = html;

        // Tilføjer "event listeners" til "+" og "-" btn
        for (let i = 1; i <= 18; i++) {
            const addBtn = document.getElementById(`add${i}`);
            const subtractBtn = document.getElementById(`subtract${i}`);
            const inputElement = document.getElementById(`hole${i}`);

            addBtn.addEventListener("click", () => {
                inputElement.value = parseInt(inputElement.value) + 1;
            });

            subtractBtn.addEventListener("click", () => {
                const value = parseInt(inputElement.value);
                if (value > 0) {
                    inputElement.value = value - 1;
                }
            });
        }

        // Tilføjer "event listeners" til "Reset" and "Start Forfra" btn
        document.getElementById("reset").addEventListener("click", reset);
        document.getElementById("startOver").addEventListener("click", startOver);
    }
}
