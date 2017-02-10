<h1>Parts Page</h1>

<div class="row">

    <table style="border: 1px solid white;">
    <tr>
        <th>id</th>
        <th>Part Code</th> 
        <th>CA Code</th>
        <th>Plant</th>
        <th>Time Built</th>
        <th></th>
    </tr>

    {parts}
    <tr>
        <td>{id}</td>
        <td>{partCode}</td> 
        <td>{caCode}</td>
        <td>{plant}</td>
        <td>{timeBuilt}</td>
        <td><a href="/part/{id}"><img src="/img/parts/{mug}" title="{partCode}"/></a></td>
    </tr>
    {/parts}
    </table> 


    

</div>