<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Feed</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <h1 class="fade-in page-title">RSS Feed Data</h1>
        <div class="rss-feed">
            <table id="rssfeed-table" class="display">
                <thead>
                    <tr class="slide-in-bottom">
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Publication Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item['title'] }}</td>
                            <td>{!! $item['description'] !!}</td>
                            <td><a href="{{ $item['link'] }}" target="_blank">Read More</a></td>
                            <td>{{ $item['pubDate'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    
    <script>
        $(document).ready(function() {
            
            if (!$.fn.DataTable.isDataTable('#rssfeed-table')) {
                $('#rssfeed-table').DataTable({
                    "lengthMenu": [[5, 10, 15, 20], [5, 10, 15, 20]],
                    "paging": true,
                    "searching": true,
                    "ordering": true
                });
            }
        });
    </script>
</body>
</html>
c 