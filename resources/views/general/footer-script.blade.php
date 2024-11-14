<script>
    function generatePDF() {
        // Implement PDF generation logic here
        alert("PDF Generated!"); // Placeholder
    }

    function handleFilterChange() {
        const filter = document.getElementById("dateFilter").value;
        if (filter === "custom") {
            document.getElementById("customDateModal").style.display = "flex";
        } else {
            window.location.href = `{{$actionRoute}}?interval=${filter}`;
        }
    }

    function closeModal() {
        document.getElementById("customDateModal").style.display = "none";
    }
<<<<<<< HEAD
=======

>>>>>>> 9320a186d8d66923bf2e8b800f7599e4e2072dd8
</script>
