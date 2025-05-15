function showContent(section) {
    const content = document.getElementById('mainContent');
    if (section === 'about') {
        content.innerHTML = `
            <h2>Балабақша туралы</h2>
            <table>
                <tr>
                    <th>№</th>
                    <th>Атауы</th>
                    <th>Жүктеу</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>паспорт сада 2022</td>
                    <td><a href="#">PDF</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>паспорт сада 2023</td>
                    <td><a href="#">PDF</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>паспорт сада 2024</td>
                    <td><a href="#">PDF</a></td>
                </tr>
            </table>
        `;
    } else {
        content.innerHTML = `<h2>${document.querySelector(`li[onclick="showContent('${section}')"]`).innerText}</h2><p>Бұл бөлім әзірлену үстінде...</p>`;
    }
}
