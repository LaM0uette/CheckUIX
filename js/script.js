document.getElementById('browseFileButton').addEventListener('click', function () {
    document.getElementById('fileInput').click();
});

document.getElementById('fileInput').addEventListener('change', function () {
    var filePath = this.value;
    document.getElementById('input-url-link-line-edit').value = filePath;
});