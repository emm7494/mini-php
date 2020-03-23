function checkStatus(res) {
  // console.log(res);
  if (res.status >= 200 && res.status < 300) {
    return Promise.resolve(res);
  } else {
    return Promise.reject(new Error(res.statusText));
  }
}

async function getCartJSON(url) {
  try {
    const res = await checkStatus(await fetch(url));
    return await res.json();
  } catch (err) {
    console.log("Fetch failed", err);
  }
}
function injectTableData(data) {
  let tableData = ``;
  for (let [key, entry] of data.entries()) {
    tableData += `<tr>
      <td span="row">${key + 1}</td>
      <td>${entry.id}</td>
      <td><img src="/static/img/${
        entry.image
      }" alt="" height="40px" width="40px"/></td>
      <td>${entry.name}</td>
      <td>${entry.price}</td>
      <td><button
        class="btn btn-danger btnDelTableRow" onclick="delTableRow(this,item=${
          entry.id
        })"><i class="fas fa-trash-alt"></i></button></td>
      </tr>`;
  }
  document.querySelector("#cartTableBody").innerHTML = tableData;
}

function loadCart() {
  getCartJSON("/api/get_cart_json")
    .then(injectTableData)
    .catch((err) => console.log(err));
}

async function delCartJSON(url) {
  const response = await fetch(url, {
    method: "GET"
  });
  return await response.text();
}

function delTableRow(delBtn, item) {
  console.log(delBtn, item);
  //   e.preventDefault();
  postCartJSON(`/api/del_cart_json?id=${item}`).then((data) =>
    console.log(data)
  );
  delCartJSON("/api/del_cart_json");
  const tableRow = delBtn.closest("tr");
  delBtn.closest("table").deleteRow(tableRow.rowIndex);
}

async function postCartJSON(url) {
  const response = await fetch(url, {
    method: "GET"
  });
  return await response.text();
}

const allBtnAddToCart = document.querySelectorAll(".btn-add-to-cart");
allBtnAddToCart.forEach((btnAddToCart) =>
  btnAddToCart.addEventListener("click", (e) => {
    console.log(e.target);
    e.preventDefault();
    const id = e.target.dataset.productId;
    postCartJSON(`/api/set_cart_json?id=${id}`).then((data) =>
      console.log(data)
    );
  })
);
