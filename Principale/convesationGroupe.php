<?php
$owner = $dataMessage['owner'];
$message = decrypt($dataMessage['message'], $key);
$video = decrypt($dataMessage['video'], $key);
$image = decrypt($dataMessage['image'], $key);
$document = decrypt($dataMessage['document'], $key);
$has_image = $dataMessage['has_image'];
$has_document = $dataMessage['has_document'];
$has_video = $dataMessage['has_video'];
$date = DateTime::createFromFormat('Y-m-d H:i:s', $dataMessage['date']);
$heure_extraite = $date->format('H:i');
?>

<div class="messageConversation_users">
    <?php if ($owner == $my_id): ?>
        <?php if (!empty($video) && !empty($message)): ?>
            
            <div class="Message">
                <div class="messageContextText image">
                    <div class="image">
                        <video src="<?= $video ?>" controls></video>
                    </div>
                    <p class="messageContent"><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php elseif (!empty($image) && !empty($message)): ?>
            
            <div class="Message">
                <div class="messageContextText image">
                    <div class="image">
                        <img src="<?= $image ?>" alt="Image">
                    </div>
                    <p class="messageContent"><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php elseif (!empty($document) && !empty($message)): ?>
            <?php
            $documentPathInfo = pathinfo($document);
            $documentName = $documentPathInfo['filename'];
            $documentType = $documentPathInfo['extension'];
            ?>
            
            <div class="Message">
                <div class="messageContextText document">
                    <div class="document">
                        <div class="iconspdf"><i class="fa-regular fa-file-pdf"></i></div>
                        <div class="detailDoc">
                            <span><?php echo $documentName ?></span>
                            <span class="ReadClass">Fichier <?php echo $documentType?> <a href="<?= $document ?>" download="<?= $documentName?>">
    <i class="fa-solid fa-download"></i>
</a>
</span>
                        </div>
                    </div>
                    <p class="messageContent"><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
            <?php elseif ($has_image == 1): ?>
            
            <div class="Message">
                <div class="messageContextText image">
                    <div class="image">
                        <img src="<?= $image ?>" alt="Image">
                    </div>
                    <?php if (!empty($message)): ?>
                        <p><?= $message ?></p>
                    <?php endif; ?>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>

        <?php elseif ($has_video == 1): ?>
            <div class="Message">
                <div class="messageContextText image">
                    <div class="image">
                        <video src="<?= $video ?>" controls></video>
                    </div>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php elseif ($has_document == 1): ?>
            <?php
            $documentPathInfo = pathinfo($document);
            $documentName = $documentPathInfo['filename'];
            $documentType = $documentPathInfo['extension'];
            ?>
            
            <div class="Message">
                <div class="messageContextText document">
                    <div class="document">
                        <div class="iconspdf"><i class="fa-regular fa-file-pdf"></i></div>
                        <div class="detailDoc">
                            <span><?php echo $documentName ?></span>
                            <span class="ReadClass">Fichier <?php echo $documentType?> <a href="<?= $document ?>" download="<?= $documentName?>">
    <i class="fa-solid fa-download"></i>
</a>
</span>
                        </div>
                    </div>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php else: ?>
            
            <div class="Message">
                <div class="messageContextText">
                    <p><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <?php if ($has_image == 1): ?>
            
            <div class="FriendMessage">
                <div class="messageContextText image">
                    <div class="image">
                        <img src="<?= $image ?>" alt="Image">
                    </div>
                    <?php if (!empty($message)): ?>
                        <p><?= $message ?></p>
                    <?php endif; ?>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php elseif ($has_video == 1): ?>
            
            <div class="FriendMessage">
                <div class="messageContextText image">
                    <div class="image">
                        <video src="<?= $video ?>" controls></video>
                    </div>
                    <p><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php elseif ($has_document == 1): ?>
            <?php
            $documentPathInfo = pathinfo($document);
            $documentName = $documentPathInfo['filename'];
            $documentType = $documentPathInfo['extension'];
            ?>
            
            <div class="FriendMessage">
                <div class="messageContextText document">
                    <div class="document">
                        <div class="iconspdf"><i class="fa-regular fa-file-pdf"></i></div>
                        <div class="detailDoc">
                            
                            <span><?php echo $documentName ?></span>
                            <span class="ReadClass">Fichier <?php echo $documentType?> <a href="<?= $document ?>" download="<?= $documentName?>">
    <i class="fa-solid fa-download"></i>
</a>
</span>
                        </div>
                    </div>
                    <p class="messageContent"><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
            <?php elseif (!empty($video) && !empty($message)): ?>
            
            <div class="FriendMessage">
                <div class="messageContextText image">
                    <div class="image">
                        <video src="<?= $video ?>" controls></video>
                    </div>
                    <p class="messageContent"><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php elseif (!empty($image) && !empty($message)): ?>
            
            <div class="FriendMessage">
                <div class="messageContextText image">
                    <div class="image">
                        <img src="<?= $image ?>" alt="Image">
                    </div>
                    <p class="messageContent"><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php elseif (!empty($document) && !empty($message)): ?>
            <?php
            $documentPathInfo = pathinfo($document);
            $documentName = $documentPathInfo['filename'];
            $documentType = $documentPathInfo['extension'];
            ?>
            
            <div class="FriendMessage">
                <div class="messageContextText document">
                    <div class="document">
                        <div class="iconspdf"><i class="fa-regular fa-file-pdf"></i></div>
                        <div class="detailDoc">
                            
                            <span><?php echo $documentName ?></span>
                            <span class="ReadClass">Fichier <?php echo $documentType?> <a href="<?= $document ?>" download="<?= $documentName?>">
    <i class="fa-solid fa-download"></i>
</a>
</span>
                        </div>
                        <p class="messageContent"><?= $message ?></p>
                    </div>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php else: ?>
            
            <div class="FriendMessage">
                <div class="messageContextText">
                    <p><?= $message ?></p>
                    <small><?= $heure_extraite ?></small>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
