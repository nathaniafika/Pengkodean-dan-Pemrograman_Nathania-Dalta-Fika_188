document.getElementById('inventory-form').addEventListener('submit', function(e) {
  e.preventDefault();

  const kode = document.getElementById('kode').value;
  const nama = document.getElementById('nama').value;
  const stok = parseInt(document.getElementById('stok').value);
  const harga = parseFloat(document.getElementById('harga').value);
  const total = stok * harga;

  const tableBody = document.querySelector('#inventory-table tbody');
  const newRow = document.createElement('tr');

  newRow.innerHTML = `
    <td>${kode}</td>
    <td>${nama}</td>
    <td>${stok}</td>
    <td>Rp${harga.toLocaleString('id-ID')}</td>
    <td>Rp${total.toLocaleString('id-ID')}</td>
  `;

  tableBody.appendChild(newRow);

  // Reset form
  this.reset();
});
