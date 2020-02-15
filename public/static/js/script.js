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
      <td>${entry.iD}</td>
      <td>${entry.fName}</td>
      <td>${entry.lName}</td>
      <td>${entry.eMail}</td>
      <td>&nbsp;</td>
    </tr>`;
  }
  document.querySelector("#cartTableBody").innerHTML = tableData;
}

getCartJSON("/api/cart")
  .then(injectTableData)
  .catch((err) => console.log(err));
