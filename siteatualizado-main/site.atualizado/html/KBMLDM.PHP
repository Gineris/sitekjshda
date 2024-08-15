<div class="search-container">
    <input type="text" placeholder="O que você esta buscando?">
    <button>Buscar</button>
    <button class="category-button">Categorias</button>
</div>

<form action="" method="POST">
    <label>Cidade:</label>
    <select name="area_atuação" id="area_atuação">
        <option value="">Escolha a Cidade</option>
        <?php
            $result_cat = "SELECT * FROM area_atuação ORDER BY cidade";
            $resultado_cat = mysqli_query($conn, $result_cat);

            if (!$resultado_cat) {
                die("Erro na consulta: " . mysqli_error($conn));
            }

            while ($row_cat = mysqli_fetch_assoc($resultado_cat)) {
                $selected = ($row_cat['id'] == $area_atuação) ? 'selected' : '';
                echo '<option value="'.$row_cat['id'].'" '.$selected.'>'.$row_cat['cidade'].'</option>';
            }
        ?>
    </select><br><br>

    <label>Nome:</label>
    <input type="text" name="nome_pesquisa" value="<?php echo htmlspecialchars($nome_pesquisa); ?>"><br><br>

    <input type="submit" value="Pesquisar">
</form>
