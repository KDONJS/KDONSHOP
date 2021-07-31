<?php include("template/cabecera.php");?>

<?php 
include("administrador/config/bd.php");
$sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>


<?php foreach($listaLibros as $libro) { ?>
<div class="product-container" data-type="meat">
    <a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem">
        <div class="img" style="background-image: url(../assets/img/pos/product-1.jpg)"><img class="card-img-top"
                src="./img/<?php echo $libro['imagen'];?>" alt=""></div>
        <div class="text">
            <div class="title"><?php echo $libro['Nombre']; ?></div>
            <div class="Descripcion"><?php echo $libro['Descripcion']; ?></div>
            <div class="price"><?php echo $libro['Precio']; ?></div>
            <div class="desc"><?php echo $libro['Categoria']; ?></div>
        </div>
    </a>
</div>

<?php } ?>
</div>
</div>
</div>
<div class="pos-sidebar" id="pos-sidebar">
    <div class="pos-sidebar-header">
        <div class="back-btn">
            <button type="button" data-dismiss-class="pos-mobile-sidebar-toggled" data-target="#pos-customer"
                class="btn">
                <svg viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </button>
        </div>
        <div class="icon"><img src="../img/POS/logo.svg" /></div>
        <div class="title">PROMOCIONES</div>
    </div>
    <div class="pos-sidebar-nav">
        <ul class="nav nav-tabs nav-fill">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#newOrderTab">New Order (5)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#orderHistoryTab">Order History
                    (0)</a>
            </li>
        </ul>
    </div>
    <div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%">
        <div class="tab-pane fade h-100 show active" id="newOrderTab">
            <div class="pos-table">
                <div class="row pos-table-row">
                    <div class="col-9">
                        <div class="pos-product-thumb">
                            <div class="img">
                                <img src="img/POS/tienda.svg" alt="">
                            </div>
                            <div class="info">
                                <div class="input-group qty">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade h-100" id="orderHistoryTab">
            <div class="h-100 d-flex align-items-center justify-content-center text-center p-20">
                <div>
                    <div class="mb-3 mt-n5">
                        <svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                            <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                        </svg>
                    </div>
                    <h4>No order history found</h4>
                </div>
            </div>
        </div>
    </div>
    <center>
        <div class="btn-row">
            <a href="https://wa.me/+51981008142/?text=hola Kdon|shop" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i> ¡ ORDENA YA !</a>
        </div>
    </center>
    <br><br>
</div>
</div>

</div>


<a href="#" class="pos-mobile-sidebar-toggler" data-toggle-class="pos-mobile-sidebar-toggled"
    data-target="#pos-customer">
    <svg viewBox="0 0 16 16" class="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
        <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
    </svg>
    <span class="badge">5</span>
</a>

</div>

<!--<div class="modal modal-pos-item fade" id="modalPosItem">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-0">
                <a href="#" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 m-4"></a>
                <div class="pos-product">
                    <div class="pos-product-img">
                        <div class="img" style="background-image: url(../assets/img/pos/product-1.jpg)"></div>
                    </div>
                    <div class="pos-product-info">
                        <div class="title">Grill Chicken Chop</div>
                        <div class="desc">
                            chicken, egg, mushroom, salad
                        </div>
                        <div class="price">$10.99</div>
                        <hr />
                        <div class="option-row">
                            <div class="qty">
                                <div class="input-group">
                                    <a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
                                    <input type="text" class="form-control border-0 text-center" name="" value="1" />
                                    <a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="option-row">
                            <div class="option-title">Size</div>
                            <div class="option-list">
                                <div class="option">
                                    <input type="radio" id="size3" name="size" class="option-input" checked />
                                    <label class="option-label" for="size3">
                                        <span class="option-text">Small</span>
                                        <span class="option-price">+0.00</span>
                                    </label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="size1" name="size" class="option-input" />
                                    <label class="option-label" for="size1">
                                        <span class="option-text">Large</span>
                                        <span class="option-price">+3.00</span>
                                    </label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="size2" name="size" class="option-input" />
                                    <label class="option-label" for="size2">
                                        <span class="option-text">Medium</span>
                                        <span class="option-price">+1.50</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="option-row">
                            <div class="option-title">Add On</div>
                            <div class="option-list">
                                <div class="option">
                                    <input type="checkbox" name="addon[sos]" value="true" class="option-input"
                                        id="addon1" />
                                    <label class="option-label" for="addon1">
                                        <span class="option-text">More BBQ sos</span>
                                        <span class="option-price">+0.00</span>
                                    </label>
                                </div>
                                <div class="option">
                                    <input type="checkbox" name="addon[ff]" value="true" class="option-input"
                                        id="addon2" />
                                    <label class="option-label" for="addon2">
                                        <span class="option-text">Extra french fries</span>
                                        <span class="option-price">+1.00</span>
                                    </label>
                                </div>
                                <div class="option">
                                    <input type="checkbox" name="addon[ms]" value="true" class="option-input"
                                        id="addon3" />
                                    <label class="option-label" for="addon3">
                                        <span class="option-text">Mushroom soup</span>
                                        <span class="option-price">+3.50</span>
                                    </label>
                                </div>
                                <div class="option">
                                    <input type="checkbox" name="addon[ms]" value="true" class="option-input"
                                        id="addon4" />
                                    <label class="option-label" for="addon4">
                                        <span class="option-text">Lemon Juice (set)</span>
                                        <span class="option-price">+2.50</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="btn-row">
                            <a href="#" class="btn btn-default" data-bs-dismiss="modal">Cancel</a>
                            <a href="#" class="btn btn-success">Add to cart <i class="fa fa-plus fa-fw ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<?php include("template/pie.php");?>