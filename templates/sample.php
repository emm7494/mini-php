                        <tbody>
                            <?php $sql = "SELECT * FROM `contact` WHERE 1";
                            $result = $conn->query($sql);
                            ?>
                            <?php while ($record_fields = $result->fetch(PDO::FETCH_ASSOC)) : ?>
                                <tr>
                                    <?php foreach ($record_fields as $field_name => $record_field) : ?>
                                        <?php if ($field_name == 'iD') : ?>
                                            <th scope="row">
                                                <?php print($record_field); ?>
                                            </th>
                                        <?php endif ?>
                                        <?php if ($field_name != 'iD') : ?>
                                            <td>
                                                <?php print($record_field); ?>
                                            </td>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                    <td>
                                        <button class="btn btn-danger" type="button" onclick="deleteRow(this)"><i class="fas fa-trash-alt"></i></button>

                                    </td>
                                </tr>

                                <script>
                                    function deleteRow(x) {
                                        const cartTable = document.querySelector('#cartTable');
                                        console.log(x.parentNode.parentNode.rowIndex);
                                        cartTable.deleteRow(x.parentNode.parentNode.rowIndex);
                                    }
                                </script>

                            <?php endwhile ?>

                        </tbody>
