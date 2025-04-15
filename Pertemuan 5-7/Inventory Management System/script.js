fetch('fetch_inventory.php')
    .then(response => response.json())
    .then(data => {
        let tableBody = document.getElementById('inventoryTable');
        tableBody.innerHTML = "";
        
        data.forEach((item, index) => {
            let row = `<tr>
                <td>${item.id}</td>
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>`;
            tableBody.innerHTML += row;
        });
    })
    .catch(error => console.error('Error fetching data:', error));
